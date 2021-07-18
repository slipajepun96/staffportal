<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Designation;
use App\Models\Estate;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $designations=Designation::all();
        $estates=Estate::all();
        
        return view('auth.register',['designations'=>$designations,'estates'=>$estates]);
    }

    // public function validator(array $data)
    // {
    //     return Validator::make($data,[
    //         'name'=>['required','string','max:255'],
    //         'designation'=>['required','string','max:255'],
    //         'birthdate'=>['required','string','max:255'],
    //         'password'=>['required','string','max:255','confirmed'],
    //         'email'=>['required','string','email','max:255'],
    //         'telephone'=>['required','numeric','max:15'],
    //         'nric'=>['required','numeric','max:12'],
    //         'estate_id'=>['required']
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     //dd($request);
        
    //     $data=$request->validate($request,[
    //         // 'name'=>'required|max:255',
    //         // 'designation'=>'required',
    //         // 'birthdate'=>'required',
    //         // 'password'=>'required|confirmed',
    //         // 'email'=>'required|email|max:255',
    //         // 'telephone'=>'required|max:11',
    //         // 'nric'=>'required',
    //         // 'estate_id'=>'required',
    //         'name'=>['required','string','max:255'],
    //         'designation'=>['required','string','max:255'],
    //         'birthdate'=>['required','string','max:255'],
    //         'password'=>['required','string','max:255','confirmed'],
    //         'email'=>['required','string','email','max:255'],
    //         'telephone'=>['required','numeric','max:15'],
    //         'nric'=>['required','numeric','max:12'],
    //         'estate_id'=>['required']
    //     ]);
    //     $data['password']=Hash::make($data['password']);

    //     User::create($data);

    //     auth()->attempt($request->only('email','password'));
    //     return redirect()->route('/');

    //     //new code

    //     // $users=new User;
    //     // $users->name=$request->name;
    //     // $users->designation=$request->designation;
    //     // $users->birthdate=$request->birthdate;
    //     // $users->password=$request->password;
    //     // $users->email=$request->email;
    //     // $users->telephone=$request->telephone;
    //     // $users->nric=$request->nric;
    //     // $users->estate_id=$request->estate_id;

    //     // $users->save();
    //     // return redirect()->route('index');

    }
