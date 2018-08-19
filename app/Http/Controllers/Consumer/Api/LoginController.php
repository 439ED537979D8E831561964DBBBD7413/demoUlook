<?php

namespace App\Http\Controllers\Consumer\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
	public function logout( Request $request ) {
		try {
			User::where( 'id', $request->id )->update( [ 'device_id' => '', 'device_token' => '' ] );

			return response()->json( [ 'message' => trans( 'api.logout_success' ) ] );
		} catch ( Exception $e ) {
			return response()->json( [ 'error' => trans( 'api.something_went_wrong' ) ], 500 );
		}
	}

}
