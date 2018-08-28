<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        if (!auth()->guard('admin')->check()) {
            return view('admin.auth.login');
        }
    }


    public function index()
    {
        return view('admin.dashboard');
    }

}
