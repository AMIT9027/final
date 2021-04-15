<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Register;
use Illuminate\Support\Facades\DB;

class SuperadminController extends Controller
{
    public function superadminpanel()
    {
        $data = Register::all();
        return view('Superadmin',["data"=>$data]);
    }

    public function getdata(Request $req)
    {
        // return $req->input('selected');
        $data = Feedback::where('Cname',$req->input('selected'))->get();
        return $data;
    }
}
