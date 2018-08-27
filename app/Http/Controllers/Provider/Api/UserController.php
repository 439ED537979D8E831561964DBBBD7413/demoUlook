<?php

namespace App\Http\Controllers\Provider\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {

        return auth()->guard('provider')->user();
    }
}
