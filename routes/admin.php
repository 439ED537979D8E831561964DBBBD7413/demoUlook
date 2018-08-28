<?php


use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\LoginController@showLoginForm')->name('loginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth:auth:checkadmin']], function () {


    // dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // users
    Route::resource('users', 'UserController');

    // providers
    Route::resource('providers', 'ProviderController');

    // services
    Route::resource('services', 'ServiceController');

    // documents
    Route::resource('documents', 'DocumentController');

    //
    Route::resource('promocodes', 'PromocodeController');

    //
    Route::get('reviews', 'DashboardController@index');

    //
    Route::get('requests', 'DashboardController@index');

    // setting
    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::post('settings', 'SettingController@store')->name('settings.store');

    //
    Route::get('payments', 'DashboardController@index');
    Route::get('payments/history', 'DashboardController@index');
});