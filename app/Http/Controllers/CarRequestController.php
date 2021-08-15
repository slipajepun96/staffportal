<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRequest;
use App\Models\Car;
use App\Models\User;
use App\Mail\CarRequestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class CarRequestController extends Controller
{

    //status code
    //1->pending approval
    //2->approved
    //3->rejected
    public function index()
    {
        $user_id=Auth::user()->id;
        $car_requests=CarRequest::select(['id','user_id','car_id','estate_id','status','planned_start_datetime','destination'])->where('user_id',$user_id)->paginate(10);
        return view('cars.request.index',['car_requests'=>$car_requests]);
    }

    public function request()
    {
        $cars=Car::all();
        return view('cars.request.request',['cars'=>$cars]);
    }

    public function store(Request $request)
    {
        $car_data=Car::findOrFail($request->car_id);
        $estate_id=$car_data['estate_id'];
        $user_data=User::find($request->user_id);
        $user_email=$user_data['email'];
     
        $this->validate($request,[
            'user_id'=>'required|max:2',
            'car_id'=>'required',
            'planned_start_datetime'=>'required',
            'planned_end_datetime'=>'required',
            'destination'=>'required|max:150',
            'journey_description'=>'required'
            
        ]);
        $car_requests=new CarRequest();
        $car_requests->user_id=$request->user_id;
        $car_requests->estate_id=$estate_id;
        $car_requests->car_id=$request->car_id;
        $car_requests->planned_start_datetime=$request->planned_start_datetime;
        $car_requests->planned_end_datetime=$request->planned_end_datetime;
        $car_requests->destination=$request->destination;
        $car_requests->journey_description=$request->journey_description;
        $car_requests->active=TRUE;
        $car_requests->status=1;

        $car_requests->save();
        //CarRequest::create($car_requests);


        return redirect('cars/request');
        Mail::to($user_email)->send( new CarRequestEmail() );
    }

    public function delete()
    {

    }

}
