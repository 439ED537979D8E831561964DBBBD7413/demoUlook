<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        if (!auth()->guard('admin')->check()) {
            return view('admin.auth.login');
        }

        return view('admin.dashboard');
    }

}
