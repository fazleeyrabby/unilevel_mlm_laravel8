<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bonus;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    

    public function dashboard()
    {
        $today_user = User::whereDate('created_at', Carbon::today())->count();
        $dealers = User::where('role','dealer')->count();
        $sub_dealers = User::where('role','sub-dealer')->count();
        $todays_income = Bonus::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('amount');
        $this_month_income = Bonus::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->sum('amount');
        $last_month_income = Bonus::whereMonth('created_at', Carbon::now()->subMonth()->month )->where('user_id', Auth::user()->id)->sum('amount');
        $this_year_income = Bonus::whereYear('created_at', Carbon::now()->year)->where('user_id', Auth::user()->id)->sum('amount');
        $users = User::orderBy('id','desc')->take(10)->get();
        return view('admin.dashboard',compact('users','today_user','dealers','sub_dealers','todays_income','this_month_income','last_month_income','this_year_income'));
    }

    public function dashboard2()
    {

        return view('admin.dashboard2');
    }

    /**
     * Show blank page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blank()
    {
        return view('admin.blank');
    }
}
