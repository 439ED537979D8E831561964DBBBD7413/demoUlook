<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Card;
use App\Http\Controllers\Controller;
use App\Http\Requests\Consumer\Api\StoreTripRequest;
use App\Provider;
use App\Request;
use App\Trip;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{

    public function storeTrip(StoreTripRequest $request)
    {

        //
        $user = Auth::user();

        // check active trips
        $requestCount = Request::pendingRequest($user->id)->count();

        if ($requestCount > 0) {
            return response()->json(['error' => trans('api.ride.request_inprogress')], 500);
        }

        // check if schedule has
        if ($request->has('schedule_date') && $request->has('schedule_time')) {

            $beforeScheduleTime = (new Carbon("$request->schedule_date $request->schedule_time"))->subHour(1);
            $afterScheduleTime = (new Carbon("$request->schedule_date $request->schedule_time"))->addHour(1);

            $scheduleTrips = $user->scheduledTrips()->whereBetween('schedule_at', [$beforeScheduleTime, $afterScheduleTime])->count();

            if ($scheduleTrips > 0) {
                return response()->json(['error' => trans('api.ride.request_scheduled')], 500);
            }
        }

        //
        $distance = 100;
        $latitude = $request->s_latitude;
        $longitude = $request->s_longitude;
        $service_type = $request->service_type_id;

        // get nearest providers
        $providers = Provider::with('service')
            ->select(DB::Raw("(6371 * acos( cos( radians('$latitude') ) * cos( radians(latitude) ) * cos( radians(longitude) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians(latitude) ) ) ) AS distance"), 'id')
            ->where('status', 'approved')
            ->whereRaw("(6371 * acos( cos( radians('$latitude') ) * cos( radians(latitude) ) * cos( radians(longitude) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians(latitude) ) ) ) <= $distance")
            ->whereHas('service', function ($query) use ($service_type) {
                $query->where('status', 'active');
                $query->where('service_type_id', $service_type);
            })
            ->orderBy('distance', 'asc')
            ->take(10)
            ->get();

        if (count($providers) == 0) {
            return response()->json(['message' => trans('api.ride.no_providers_found')]);
        }

        //
        try {

            // todo change google map api key from setting
            $details = "https://maps.googleapis.com/maps/api/directions/json?origin=" .
                $request->s_latitude . "," . $request->s_longitude . "&destination=" . $request->d_latitude . "," . $request->d_longitude .
                "&mode=driving&key=AIzaSyAbPl9uGqRc8xf6QiWimC7KRZg352ukiFI";

            $json = curl($details);

            $details = json_decode($json, TRUE);

            $route_key = $details['routes'][0]['overview_polyline']['points'];

            $trip = new Trip();
            $trip->booking_id = Helper::generate_booking_id();
            $trip->user_id = $user->id;

            // check for manual request & broadcast request is not
            // store provider id for calling
            // direct calling feature.
            $trip->current_provider_id = 0; // set current provider id from client

            $trip->service_type_id = $request->service_type_id;
            $trip->payment_mode = $request->payment_mode;

            $trip->status = 'SEARCHING';

            $trip->s_address = $request->s_address ?: "";
            $trip->d_address = $request->d_address ?: "";

            $trip->s_latitude = $request->s_latitude;
            $trip->s_longitude = $request->s_longitude;

            $trip->d_latitude = $request->d_latitude;
            $trip->d_longitude = $request->d_longitude;

            $trip->distance = $request->distance;

            if ($user->wallet_balance > 0) {
                $trip->use_wallet = $request->use_wallet ?: 0;
            }

            // checking for track distance
//            if (Setting::get('track_distance', 0) == 1) {
//                $trip->is_track = "YES";
//            }

            $trip->assigned_at = Carbon::now();
            $trip->route_key = $route_key;

            // surge triggering
            // surge trigger = 0
            if ($providers->count() <= 0 && $providers->count() > 0) {
                $trip->surge = 1;
            }

            // storing schedule date and time
            if ($request->has('schedule_date') && $request->has('schedule_time')) {
                $trip->schedule_at = date("Y-m-d H:i:s", strtotime("$request->schedule_date $request->schedule_time"));
            }

            // check for manual request & broadcast request  is not
            // (new SendPushNotification)->IncomingRequest($providers[0]->id);
            // sending push notification

            $trip->save();


            // update payment mode
            $user->update(['payment_mode' => $request->payment_mode]);

            if ($request->has('card_id')) {
                $user->cards()->update(['is_default' => 0]);
                Card::where('card_id', $request->card_id)->update(['is_default' => 1]);
            }


            // storing requests and sending push notification for broadcast request
            // when manual request not
//            if (Setting::get('manual_request', 0) == 0) {
            foreach ($providers as $key => $provider) {

//                    if (Setting::get('broadcast_request', 0) == 1) {
//                        (new SendPushNotification)->IncomingRequest($provider->id);
//                    }

                $tripRequest = new Request();

                // Send push notifications to the first provider
                // incoming request push to provider

                $tripRequest->user_id = $user->id;
                $tripRequest->trip_id = $trip->id;
                $tripRequest->provider_id = $provider->id;
                $tripRequest->save();
            }
//            }

            return response()->json([
                'message' => 'New request Created!',
                'request_id' => $trip->id,
                'current_provider' => $trip->current_provider_id,
            ]);

        } catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }

    }

    public function cancelTrip()
    {

    }

}
