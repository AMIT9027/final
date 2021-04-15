<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function insert(Request $req)
    {
        $data = $req->input();
        $Compay_Logo_Name = $data['CName'].".".$req->file('image')->getClientOriginalExtension();
        $req->file('image')->storeAs('public/CompanyLogos',$Compay_Logo_Name);

        DB::table('Registers')->insert([
                                            'CompanyName' => $data['CName'],
                                            'Email' => $data['Email'],
                                            'Password' => Hash::make($data['Password']),
                                            'CompanyLogo' => $Compay_Logo_Name,
                                            'created_at' => now(),
                                            'updated_at' => now(),
                                            'plan_Buyied' => now()
                                                    ]);
            $alldata = Register::where('Email', '=',$data['Email'])->first();
            // $regis = new Register();
            // $regis->CompanyName = $data['CName'];
            // $regis->Email = $data['Email'];
            // $regis->Password=  Hash::make($data['Password']);
            // $regis->CompanyLogo = $Compay_Logo_Name;
            // $regis->save();

            $req->session()->put('Company_ID',$alldata['Id']);
        return redirect('login');
    }
}
