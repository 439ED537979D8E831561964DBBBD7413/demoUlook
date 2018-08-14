<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consumer\Api\UpdateUserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller {

	public function index() {
		return auth()->user();
	}

	public function update( UpdateUserRequest $request ) {

		$user = auth()->user();

		if ( $request->first_name ) {
			$user->update( [ 'first_name' => $request->first_name ] );
		}

		if ( $request->last_name ) {
			$user->update( [ 'last_name' => $request->last_name ] );
		}

		if ( $request->mobile ) {
			$user->update( [ 'mobile' => $request->mobile ] );
		}

		return $user;


	}

}
