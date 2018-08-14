<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consumer\Api\RegisterApiRequest;
use App\Http\Requests\Consumer\Api\UpdateNameRequest;
use App\User;
use Exception;

class RegisterController extends Controller {

	public function register( RegisterApiRequest $request ) {

		try {
			$user                 = $request->all();
			$user['payment_mode'] = "CASH";
			$user['password']     = bcrypt( $request->password );
			$user                 = User::create( $user );

			return $user;
		} catch ( Exception $e ) {
			return response()->json( [ 'error' => trans( 'api.something_went_wrong' ) ], 500 );
		}

	}

	public function updateName( UpdateNameRequest $request ) {

		try {
			$user = auth()->user();
			$user->fill( $request->all() );
			$user->save();

			return $user;
		} catch ( Exception $e ) {
			return response()->json( [ 'error' => trans( 'api.something_went_wrong' ) ], 500 );
		}

	}


}
