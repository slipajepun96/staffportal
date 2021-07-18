<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Estate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update()
    {
        $designations=Designation::all();
        $estates=Estate::all();
        $user=Auth::user();
        
        return view('configuration.update-profile',['designations'=>$designations,'estates'=>$estates,'user'=>$user]);
    }


    }
