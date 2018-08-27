<?php

namespace App\Http\Controllers\Provider\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consumer\Api\UpdateLocationRequest;

class LocationController extends Controller
{


    public function store(UpdateLocationRequest $request)
    {

        if ($provider = auth()->user()) {

            $provider->latitude = $request->latitude;
            $provider->longitude = $request->longitude;
            $provider->save();

            return response()->json(['message' => 'Location Updated successfully!']);

        } else {
            return response()->json(['error' => 'Provider Not Found!']);
        }
    }


}
