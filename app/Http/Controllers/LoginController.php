<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;

use Illuminate\Http\Request;
use ReflectionReference;

class LoginController extends Controller
{
    public function check(Request $req)
    {
        $data = $req->input();
        $alldata = Register::where('Email', '=',$data['Email'])->first();
        if(Register::where('Email','=',$data['Email'])->exists())
        {
            if(Hash::check($data['Password'], $alldata['Password']))
            {
                $req->session()->put('User_Details',$alldata);
                // return session()->get('User_Details');
                return redirect('/Profile');
                //  return $alldata;
            }
            else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/login');
        }
    }
}
