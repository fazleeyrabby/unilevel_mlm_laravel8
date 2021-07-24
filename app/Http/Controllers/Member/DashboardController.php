<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bonus;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $today_user = User::whereDate('created_at', Carbon::today())->count();
        $earnings = Bonus::with('user')->where('user_id',Auth::user()->id)->orderBy('bonus_id','desc')->take(10)->get();
        return view('member.dashboard',compact('earnings','today_user'));
    }
}
