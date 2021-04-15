<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Feedback;

class ProfileController extends Controller
{
    public function checkActivation(Request $req)
    {
        $id = session('User_Details')['Id'];
        $alldata = Register::where('Id',$id)->get()->first();
        // return $alldata->planbuy;
        if($alldata->planbuy)
        {
            $req->session()->put('Buyied',$alldata->planbuy);
            // return view('profile');
            return view('profile')->with('Buyied',1);
        }
        else{
            $req->session()->put('NotBuyied',$alldata->planbuy);
            return view('profile')->with('Buyied',0);
        }
    }
   public function PlanExpiryDate(Request $req)
   {
    $id = session('User_Details')['Id'];
    $alldata = Register::where('Id',$id)->get()->first();

    $CompanyName= session('User_Details')['CompanyName'];
    $feedbackdata = Feedback::where('Cname',$CompanyName)->count();
    $feedbackremaining = 100 - $feedbackdata;
    $req->session()->put('feedbacknumber',['feedbackdata' => $feedbackdata,'feedbackremaining'=>$feedbackremaining]);


    return view('profile')->with('updated_at',$alldata['updated_at'])->with('planExpiry',$alldata['plan_Buyied']);
   }
//    public function Nooffeedbacks(Request $req)
//    {
//     $CompanyName= session('User_Details')['CompanyName'];
//     $feedbackdata = Feedback::where('Cname',$CompanyName)->count();
//     $req->session()->put('feedbacknumber',$feedbackdata);
//     // return view('profile');
//    }
}
