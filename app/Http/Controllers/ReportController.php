<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Global_;

class ReportController extends Controller
{
    public $CompanyName;
    public function checkCompanyName(Request $req)
    {
        // config(['yourconfig.company' => $req->input('CompanyName')]);
      global $CompanyName;
      $CompanyName = $req->input('CompanyName');
        $alldata = Register::where('CompanyName',$req->input('CompanyName'))->get()->first();
        if($alldata)
        {
            return view('report')->with('Register',1);
        }
        else{
            return view('report')->with('Register',0);
        }
    }
    public function addfeedback(Request $req)
    {
        global $CompanyName;
        $data = $req->input();
        // return $req->file('attachment')->getClientOriginalExtension();
        // return $_GET['CompanyName'];
        // return $data;
        $Attachments =$data['Cname'].".Feedback.".$req->file('attachment')->getClientOriginalExtension();
        // // $Attachments = $data['Cname'].".Feedback.".$req->file('Attachment')->Extension();
        $req->file('attachment')->storeAs('public/Feedbacks/'.$data['Cname'], $Attachments);
        // return $req->file('Attachment');
        DB::table('Feedbacks')->insert([
                        'Concern' => $data['Concern'],
                        'Happen' => $data['Happen'],
                        'Cname' => $data['Cname'],
                        'Attachment' => $Attachments,
                        'Details' => $data['Details']
        ]);
        return redirect('front');
    }
}
