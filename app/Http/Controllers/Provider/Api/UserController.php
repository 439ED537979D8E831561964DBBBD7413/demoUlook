<?php

namespace App\Http\Controllers\Provider\Api;

use App\Http\Controllers\Controller;
use App\ProviderDevices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return auth()->user();
    }

    public function with(Request $request)
    {

        $provider = auth()->user();

        $providerDevice = new ProviderDevices();
        $providerDevice->provider_id = $provider->id;
        $providerDevice->type = $request->device_type;
        $providerDevice->udid = $request->device_id;
        $providerDevice->token = $request->device_token;
        $providerDevice->save();

        return $provider;

    }

}
