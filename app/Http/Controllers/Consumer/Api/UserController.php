<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Http\Requests\Consumer\Api\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return auth()->user();
    }

    public function with(Request $request)
    {
        auth()->user()->fill($request->all());
        return auth()->user();
    }

    public function update(UpdateUserRequest $request)
    {

        $user = auth()->user();

        if ($request->first_name) {
            $user->update(['first_name' => $request->first_name]);
        }

        if ($request->last_name) {
            $user->update(['last_name' => $request->last_name]);
        }

        if ($request->mobile) {
            $user->update(['mobile' => $request->mobile]);
        }

        return $user;

    }

    public function getSetting()
    {
        $user = auth()->user();
        $user['favorites_location'] = $user->locations;
    }
}
