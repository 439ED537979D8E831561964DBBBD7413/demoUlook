<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api', 'auth:provider']], function () {

    // user details update routes
    Route::post('logout', 'LoginController@logout');
    Route::post('update/name', 'RegisterController@updateName'); // update name
    Route::get('/', 'UserController@index'); // update user
    Route::post('/', 'UserController@update');

    // location routes
    Route::post('location', 'LocationController@update'); // update location

    // setting routes
    Route::post('setting', 'UserCotroller@getSetting');

    // services
    Route::get('services', 'ServiceController@index');

});