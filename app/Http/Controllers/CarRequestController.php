<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRequest;
use App\Models\Car;

class CarRequestController extends Controller
{
    public function index()
    {
        $car_requests=CarRequest::select(['id','user_id'])->paginate(10);

        return view('cars.request.index',['car_requests'=>$car_requests]);
    }

    public function request()
    {
        $cars=Car::all();
        return view('cars.request.request',['cars'=>$cars]);
    }
}
