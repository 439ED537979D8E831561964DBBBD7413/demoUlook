<?php

namespace App\Http\Controllers\Consumer\Api;

use App\Http\Controllers\Controller;
use App\ServiceType;
use Exception;

class ServiceController extends Controller
{

    public function index()
    {
        try {
            $services = ServiceType::all();
            return response()->json($services);
        } catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }

}
