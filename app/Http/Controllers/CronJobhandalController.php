<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\Bonus;
use App\Models\Carrylog;
use Hash;
use Auth;
use DB;

class CronJobhandalController extends Controller
{
    public function updateCarryEveryDay(){
        $users = User::all();
        foreach ($users as $user){
            $carries = Carrylog::where('user_id',$user->id)->where('paid',null)->get();
            $center=  sizeof($carries);
            $carrySum = 0;
            if($center >= 3){
                foreach($carries as $carry){
                    $carrySum +=$carry->carry;
                }
                if($carrySum >=1000){
                    Carrylog::where('user_id',$user->id)->where('paid',null)->update('paid',1);
                    $package = Package::where('package_id', $user->package_id)->first();
                    $pv = $package->point/10;
                    User::where('id',$user->id)->update(['pv' => $pv, 'total_pv' => $user->total_pv + $pv, 'carry' => 0, 'carry_counter' => 0, 'carry_vanished' => date('Y-m-d')]);
                }else{
                    User::where('id',$user->id)->update(['carry_counter' => $center]);
                }

                
                
                // $bonus = new Bonus();
                // $bonus->user_id = $user->id;
                // $bonus->user_balance = $user->balance + ($package->point/10); 
                // $bonus->amount = $package->point/10; 
                // $bonus->type = 'carry bonus';
                
                // $bonus->save(); 

            }
        }
    }
}