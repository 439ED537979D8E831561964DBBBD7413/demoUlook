<?php

namespace App\Http\Controllers\Provider\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
