<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Consumer\Api'], function () {

    // auth routes
    Route::post('register', 'RegisterController@register'); // register

    Route::group(['middleware' => ['auth:api']], function () {

        // user details update routes
        Route::post('logout', 'LoginController@logout');
        Route::post('update/name', 'RegisterController@updateName'); // update name
        Route::get('/', 'UserController@index'); // update user
        Route::post('/with', 'UserController@with');
        Route::post('/', 'UserController@update');

        // location routes
        Route::post('location', 'LocationController@update'); // update location

        // setting routes
        Route::post('setting', 'UserCotroller@getSetting');

        // services
        Route::get('services', 'ServiceController@index');

        // trips
        Route::post('trips', 'TripController@storeTrip');

    });

});