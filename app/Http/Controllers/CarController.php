<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars=Car::select(['id','registration_no','model','estate_id'])->paginate(10);

        return view('cars.index',['cars'=>$cars]);
    }

    public function view($id)
    {
        $car=Car::find($id);

        return view('cars.view',['car'=>$car]);
    }

}