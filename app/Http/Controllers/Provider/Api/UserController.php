<?php

namespace App\Http\Controllers\Provider\Api;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {

        return auth()->user();
    }
}
