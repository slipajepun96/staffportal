<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Estate;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars=Car::select(['id','registration_no','model','estate_id','active'])->paginate(10);

        return view('cars.index',['cars'=>$cars]);
    }

    public function view($id)
    {
        $car=Car::find($id);
        if($car->active==TRUE)
        {
            return view('cars.view',['car'=>$car]);
        }
        else
        {
            return $this->index();
        }
    }

    public function add()
    {
        $users=User::all();
        $estates=Estate::all();
        
        return view('cars.add-car',['users'=>$users,'estates'=>$estates]);
    }

    public function store(Request $request)
    {
        //dd($request);
        if($request->official_car==1)
        {
            $request->official_car=TRUE;
        }
        else
        {
            $request->official_car=FALSE;
        }
        $data=$request->validate([
            'registration_no'=>'required|max:15',
            'model'=>'required',
            'engine_no'=>'required',
            'chassis_no'=>'required',
            'price'=>'required|max:15',
            'date_of_purchase'=>'required',
            'date_of_roadtax_expired'=>'required',
            'fuel_type'=>'required|max:15',
            'official_car_of'=>'max:255',
            'estate_id'=>'required|max:2',
            'official_car'=>'required',
            'active'=>'required'
        ]);
        

        //dd($data);
        Car::create($data);

        return redirect('dashboard');

        //new code

        // $users=new User;
        // $users->name=$request->name;
        // $users->designation=$request->designation;
        // $users->birthdate=$request->birthdate;
        // $users->password=$request->password;
        // $users->email=$request->email;
        // $users->telephone=$request->telephone;
        // $users->nric=$request->nric;
        // $users->estate_id=$request->estate_id;

        // $users->save();
        // return redirect()->route('index');
    }

}
