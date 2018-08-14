<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consumer\Api\UpdateLocationRequest;
use App\User;

class LocationController extends Controller {

	public function update( UpdateLocationRequest $request ) {

		$user = User::find( auth()->user()->id );

		if ( $user ) {

			$user->latitude  = $request->latitude;
			$user->longitude = $request->longitude;
			$user->save();

			return response()->json( [ 'message' => trans( 'api.user.location_updated' ) ] );
		} else {
			return response()->json( [ 'error' => trans( 'api.user.user_not_found' ) ], 500 );
		}

	}

}
