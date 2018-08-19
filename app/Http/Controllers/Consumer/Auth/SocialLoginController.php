<?php

namespace App\Http\Controllers\Consumer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller {

	public function redirectToFaceBook() {
		return Socialite::driver( 'facebook' )->redirect();
	}

	public function providerToFaceBook() {
		return Socialite::driver( 'facebook' )->with( [ 'state' => 'provider' ] )->redirect();
	}


	public function handleFacebookCallback( Request $request ) {

	}


}
