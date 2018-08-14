<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
	return view( 'welcome' );
} );

Auth::routes();

Route::group( [ 'namespace' => 'Consumer' ], function () {

	Route::group( [ 'namespace' => 'Auth' ], function () {
		Route::get( 'auth/facebook', 'SocialLoginController@redirectToFaceBook' );
		Route::get( 'auth/facebook/callback', 'SocialLoginController@handleFacebookCallback' );
		Route::get( 'auth/google', 'SocialLoginController@redirectToGoogle' );
		Route::get( 'auth/google/callback', 'SocialLoginController@handleGoogleCallback' );
	} );

} );