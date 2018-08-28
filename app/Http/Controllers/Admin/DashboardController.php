<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:admin');
    }


    public function index()
    {

        auth()->guard('admin')->check();

        return auth()->guard('admin')->user();

        return view('admin.dashboard');
    }

}
