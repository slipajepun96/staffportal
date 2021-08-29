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
        // if($request->official_car==1)
        // {
        //     $request->official_car=TRUE;
        // }
        // else
        // {
        //     $request->official_car=FALSE;
        // }
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
            'type_of_usage'=>'required',
            'active'=>'required',
            'car_approver_user_id'=>'required',

        ]);
        
        Car::create($data);
        return redirect('cars/index');
    }

    public function deactivate($id)
    {
        $car=Car::find($id);
        $car->active=0;
        $car->save();
        return redirect('cars/index')->with('status','Kenderaan Telah Dinyahaktifkan');
    }

    public function edit($id)
    {
        $car=Car::find($id);
        $users=User::all();
        $estates=Estate::all();

        return view('cars.edit-car',['car'=>$car,'users'=>$users,'estates'=>$estates]);
    }

    public function update(Request $request,$id )
    {
        //dd($request);
        if($request->official_car==1)
        {
            $request->official_car=1;
        }
        else
        {
            $request->official_car=0;
        }
        $data=$request->validate([
            'registration_no'=>'required|max:15',
            'model'=>'required',
            'engine_no'=>'required',
            'chassis_no'=>'required',
            'price'=>'required|max:15',
            'date_of_roadtax_expired'=>'required',
            'official_car_of'=>'max:255',
            'estate_id'=>'required|max:2',
            'type_of_usage'=>'required',
            'active'=>'required',
        ]);       

    //    dd($data['registration_no']);

        $car=Car::findOrFail($id);
        
        $car->registration_no=$data['registration_no'];
        $car->model=$data['model'];
        $car->engine_no=$data['engine_no'];
        $car->chassis_no=$data['chassis_no'];
        $car->price=$data['price'];
        $car->date_of_roadtax_expired=$data['date_of_roadtax_expired'];
        $car->type_of_usage=$data['type_of_usage'];
        $car->official_car_of=$data['official_car_of'];
        $car->estate_id=$data['estate_id'];

        $car->save();
        return redirect('cars/index');
    }
}
