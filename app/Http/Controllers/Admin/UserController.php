<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use App\Rules\CheckParent;
use App\Rules\CheckPackage;
use App\Rules\CheckDealer;
use App\Models\User;
use App\Models\Package;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

     /**
     * Display user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {   
        
        $id = base64_decode($id);
        $user = User::findOrFail($id);
        $parent = User::find($user->parent_id);
        $sponsor = User::find($user->sponsor_id);
        $dealer  = $this->getUserBy(['dealer_code' => $user->dealer_code]);
        return view('admin.users.profile', compact('user','parent','sponsor','dealer'));
    }


    public function contact_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'thana' => 'required',
            'district' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            
        ]);

        $id = base64_decode($id);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->thana = $request->thana;
        $user->district = $request->district;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->national_id = $request->national_id;
        if($user->save()){
            return redirect('admin/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('admin/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
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
            return redirect('admin/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('admin/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
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
            return redirect('admin/users')->with(['status' => 'success', 'message' => 'Profile update success!']);
        }
        else{
            return redirect('admin/users')->with(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
    
    /**
     * Show the form for new user registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function join()
    {
        $user = User::findOrFail(1);
        $packages = Package::all();
        return view('admin.users.join', compact('user','packages'));
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
            'username' => ['required', 'unique:users','min:8'],
            'sponsor' => ['required', new CheckParent()],
            'package' => ['required', new CheckPackage()],
            'parent' => ['required', new CheckParent()],
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

        
        $user = new User;
        $user->username = $request->username;
        $user->sponsor_id = $this->getUserBy(['username' => $request->sponsor])->id;
        $user->package_id = $request->package;
        $user->parent_id = $this->getUserBy(['username' => $request->parent])->id;
        $user->position = $request->position;
        $user->dealer = $request->dealer_code;
        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->thana = $request->thana;
        $user->district = $request->district;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->transaction_password = $request->transaction_password;

        return $user->save();
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

