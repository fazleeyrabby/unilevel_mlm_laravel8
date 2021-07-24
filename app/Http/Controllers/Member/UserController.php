<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Rules\CheckParent;
use App\Rules\CheckPackage;
use App\Rules\CheckDealer;
use App\Models\Package;
use App\Models\Bonus;
use App\Models\User;
use Hash;
use Auth;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('parent_id', Auth::user()->id)->get();
        return view('member.users', compact('users'));
    }

     /**
     * Display user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {   
        
        $id = base64_decode($id) /Auth::user()->id;
        $user = User::findOrFail($id);
        $parent = User::find($user->parent_id);
        $sponsor = User::find($user->sponsor_id);
        $dealer  = $this->getUserBy(['dealer_code' => $user->dealer_code]);
        return view('member.users.profile', compact('user','parent','sponsor','dealer'));
    }


    /**
     * Display user referral.
     *
     * @return \Illuminate\Http\Response
     */
    public function referral($id)
    {   
        
        $id = base64_decode($id) /Auth::user()->id;
        $user = User::findOrFail($id);
        $users = User::where(['sponsor_id' => $id])->get();
        return view('member.users.referral', compact('user','users'));
    }

     /**
     * Display user bonus.
     *
     * @return \Illuminate\Http\Response
     */
    public function bonus($id)
    {   
        
        $id = base64_decode($id) /Auth::user()->id;
        $user = User::findOrFail($id);
        $bonus = Bonus::with('user')->where(['user_id' => $id])->get();
        return view('member.users.bonus', compact('user','bonus'));
    }

    public function contact_update(Request $request, $id)
    {
        $id = base64_decode($id)/Auth::user()->id;

        $user = User::find($id);

        $request->validate([
            'name' => 'required|max:255',
            'profile_picture' => 'image',
            'email' => 'required|email|unique:users,email,'.$user->id.',id',
            'phone' => 'required',
            'thana' => 'required',
            'district' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            
        ]);

        $user->name = $request->name;
       
        $user->phone = $request->phone;
        $user->thana = $request->thana;
        $user->district = $request->district;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->national_id = $request->national_id;

        if($request->file('profile_picture'))
            $request->file('profile_picture')->move(public_path('assets/images/users/'), $id.'.jpg');
        
        if($user->save()){
            return redirect('member/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('member/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    

    public function password_update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'same:password|required',
        ]);

        $id = base64_decode($id);
        $user = User::findOrFail($id);
        $user->password = $request->password;
        if($user->save()){
            return redirect('member/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('member/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }

    public function trans_pass_update(Request $request, $id)
    {
        $request->validate([
            'transaction_password' => 'required',
            'transaction_password_confirmation' => 'required|same:transaction_password',
        ]);

        $id = base64_decode($id);
        $user = User::findOrFail($id);
        $user->transaction_password = $request->transaction_password;
        if($user->save()){
            return redirect('member/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('member/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
    
    /**
     * Show the form for new user registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function join()
    {
        
        $packages = Package::all();
        return view('member.users.join', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'unique:users','min:4'],
            'sponsor' => ['required', new CheckParent()],
            'package' => ['required', new CheckPackage()],
            'parent' => ['required', new CheckParent()],
            'porfile_picture' => 'image|mimes:jpeg,png,jpg|max:2048',
            'position' =>  [
                'required', 
                Rule::unique('users')
                       ->where('parent_id', $request->parent)
                       ->where('position', $request->position)
            ],
            'dealer_code' => ['required', new CheckDealer()],
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'thana' => 'required',
            'district' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            'password' => 'required:min:6',
            'confirm_password' => 'same:password|required',

            'transaction_password' => 'min:6|required',
            'confirm_transaction_password' => 'same:transaction_password|required',
        ]);

        $sponsor = $this->getUserBy(['username' => $request->sponsor]);
        $parent = $this->getUserBy(['username' => $request->parent]);
        $dealer  = $this->getUserBy(['dealer_code' => $request->dealer_code]);

        $user = new User;
        $user->username = $request->username;
        $user->sponsor_id = $sponsor->id;
        $user->package_id = $request->package;
        $user->parent_id = $parent->id;
        $user->position = $request->position;
        $user->dealer_id = $user->id;
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->thana = $request->thana;
        $user->district = $request->district;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->transaction_password = Hash::make($request->transaction_password);

        $user->save();
        $user_id = $user->id;

        $request->profile_picture->move(public_path('assets/images/users'), $user_id.'.jpg');

        $this->paySponsorBonus($request->package, $sponsor->id, $user_id);
        $this->deductPackagePoint($request->package);
        $this->payBonusByDealerCode($dealer->id, $user_id);
        $this->payGenerationBonus($parent->id, $user_id, $request->package);
        User::where('id', $sponsor->id)->update(['total']);
        return redirect('member/users/'.base64_encode($user_id * Auth::user()->id) .'/profile');
    }

    /**
     * Pay 10% sponsor bonus.
     *
     * @param  int  $package_id
     * @param  int  $sponsor_id
     * @param  int  $reference_id // newly created user id
     * 
     */
    
    public function paySponsorBonus($package_id, $sponsor_id, $reference_id){
        $package = Package::find($package_id);
        $amount = ($package->point ) / 10 ;
        $type = 'sponsor';

        $bonus = new Bonus;
        $bonus->user_id = $sponsor_id;
        $bonus->amount = $amount;
        $bonus->type = $type;
        $bonus->model =  '';
        $bonus->reference_id = $reference_id;

        $bonus = $bonus->save();
        DB::table('users')->where('id', $sponsor_id)->increment('bonus', $amount);
    }

    /**
     * Deduct package point from auth user to create new user.
     *
     * @param  int  $package_id
     * @return 
     */

    public function deductPackagePoint($package_id){
        $package = Package::find($package_id);
        DB::table('users')->where('id', Auth::user()->id)->decrement('balance', $package->point);
    }

    /**
     * Deduct package point from auth user to create new user.
     *
     * @param  int  $dealer_code
     * @param  int  $reference_id // newly created user id
     * 
     */

    public function payBonusByDealerCode($id, $reference_id){
        $dealer  = User::find($id);
        if($dealer->role == 'sub-dealer'){
            $bonus = new Bonus;
            $bonus->user_id = $dealer->id;
            $bonus->amount = '5';
            $bonus->type = 'sub-dealer';
            $bonus->model =  '';
            $bonus->reference_id = $reference_id;
            $bonus = $bonus->save();
            DB::table('users')->where('id', $dealer->id)->increment('bonus', 5);
        }
        
        $this->findDealerAndPay($dealer->dealer_id, $reference_id);
    }


    /**
     * Deduct package point from auth user to create new user.
     *
     * @param  int  $dealer_id
     * @param  int  $reference_id // newly created user id
     * 
     */

    public function findDealerAndPay($dealer_id, $reference_id){
        $dealer  = $this->getUserBy(['dealer_id' => $dealer_id]);

        $bonus = new Bonus;
        $bonus->user_id = $dealer->id;
        $bonus->amount = '2';
        $bonus->type = 'dealer';
        $bonus->model =  '';
        $bonus->reference_id = $reference_id;
        $bonus = $bonus->save();
        DB::table('users')->where('id', $dealer->id)->increment('bonus', 2);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $parent_id // parent user id
     *   @param  int user_id //newly created user id
     */

    protected function payGenerationBonus($parent_id, $position, $user_id, $package_id){
        $package = Package::find($package_id);
        $amount = ($package->point ) / 100;
        $ids = [];
        $bonusData = [];
        $i=0;
        $break = 0;
        
        $carrylog = new Carrylog();
        $carrylog->user_id = $parent_id;
        $carrylog->carry = ($package->point ) / 10;
        $carrylog->down_position = $position;
        $carrylog->reference_id = $user_id;
        $carrylog->save();

        while($i<10 && $break != 1){
            $parent = $this->getUserBy(['id' => $parent_id]);
           
            $parent_id =$parent->parent_id;
            $position = $parent->position;

            $ids[] = $parent->id;
            if($parent->id == 1 || $parent->parent_id == 0){
                $break = 1;
            }
            $bonusData[] = ['user_id' => $parent->parent_id, 'user_balance' => $parent->bonus + $amount, 'amount' => $amount, 'type' => 'Generation', 'reference_id' => $user_id];
            
            if($i < 9){
                $carrylog = new Carrylog();
                $carrylog->user_id = $parent_id;
                $carrylog->carry = ($package->point ) / 10;
                $carrylog->down_position = $position;
                $carrylog->reference_id = $user_id;
                $carrylog->save();
            }
            $i++;
        }

        DB::table('users')->whereIn('id', $ids)->increment('bonus', $amount);
        DB::table('users')->whereIn('id', $ids)->increment( 'carry' , $package->point  / 10 );
        DB::table('bonus')->insert($bonusData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getUserBy($array = []){
        return User::where($array)->first();
    }
}
