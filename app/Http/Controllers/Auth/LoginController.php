<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }

    protected $maxAttempts = 3;
    protected $decayMinutes = 1;

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string|min:3',
            'password' => 'required|string|min:6',
        ]);

        $login = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = $request->only($login, 'password');

        if (Auth::attempt($credentials)) {
            $downline_updated = strtotime(date(Auth::user()->downline_updated));
            $today = strtotime(date('Y-m-d'));
            
            // if($downline_updated || (($today - $downline_updated) / 86400 ) > 7){
               
                $downline = $this->countDownline(0, Auth::user()->id);
         
                DB::table('users')
                ->where('id', Auth::user()->id)
                ->update(['downline' => $downline, 'downline_updated' => date('Y-m-d')]);
            // }

            if(Auth::user()->role === 'admin'){
                return redirect()->intended('admin');
            }
            if(Auth::user()->role === ('dealer' || 'sub-dealer')){
                return redirect()->intended('dealer');
            }
            return redirect()->intended('/member');
        }

        

        return redirect('login')->with('error', 'Opes! You have entered invalid credentials');
    }

    public function countDownline($total, $parent_id){
        $tree = User::where(['parent_id' => $parent_id])->get();
        if(count($tree)> 0){
            $total += count($tree);
            for($i = 0; $i< $total; $i++){
                return $this->countDownline($total, $tree[$i]->id);
            }
        }
        return $total;
    }

    public function findUsername()
    {
        $login = request()->input('email');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
 
    public function username()
    {
        return $this->username;
    }
    
}