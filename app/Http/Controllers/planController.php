<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;
class planController extends Controller
{
    public function addplan(Request $req){
        // // $data = $req->input();
        // $id = $req->session()->get('Company_ID');
        // // $data = Register::find($id);
        // // $data->planbuy = $req->input('value');
        // // // return $req->input('value');
        // // $data->save();
        
        // // // return $data->Id;
        // DB::table('Registers')->where('Id','=',$id)->update([
        //     'planbuy' => $req->input('value')
        // ]);
        // // return $id;
        // // if ()
        // // $req->session()->put('Plan', $req->input('value'));
        // // return redirect('Profile');
        // return DB::table('Registers')->select('select * from Registers where Id = ? and planbuy != ?',[$id,NULL]);
        // // DB::select('select * from users where active = ?', [1])
        $id = session('User_Details')['Id'];
        DB::table('Registers')->where('Id','=',$id)->update([
                'planbuy' => $req->input('value'),
                'updated_at' => now(),
                // 'plan_Buyied' => date("Y-m-d", strtotime(date("Y-m-d"),strtotime(now())). "+ 30 day")
                'plan_Buyied' => date('Y-m-d', strtotime(now(). ' +30 days'))

                ]);
        $alldata = Register::where('Id',$id)->get()->first();

        if($alldata['planbuy'])
        {
            $req->session()->put('Buyied',$alldata['planbuy']);
        }
        return view('plan');
    }
    public function PlanExpiry(Request $req)
    {
        $UserRegDate = session('User_Details')['updated_at'];
        $MembershipEnds = date("Y-m-d", strtotime(date("Y-m-d"),strtotime($UserRegDate)). "+ 30 day");
    }
}
