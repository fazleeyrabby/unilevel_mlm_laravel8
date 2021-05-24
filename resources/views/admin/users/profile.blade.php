@extends('layouts.dashboard')

@section('title', 'User Details')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item "> <a href="#">Users</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
        <h5 class="page-title">User Details</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Profile Information</h4>
            <div class="card-body">

                <form class="" action="#" novalidate="">
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control"  disabled placeholder="{{$user->username}}">
                    </div>

                    <div class="form-group">
                        <label for="sponsor_id">sponsor</label>
                        <input id="sponsor_id" type="text" class="form-control" disabled placeholder="{{$sponsor->name}}">
                       
                    </div>

                    <div class="form-group">
                        <label for="parent">parent</label>
                        <input id="parent" type="text" class="form-control" disabled placeholder="{{$parent->name}}">
                       
                    </div>

                    <div class="form-group">
                        <label for="dealer_code">dealer</label>
                        <input id="dealer_code" type="text" class="form-control" disabled placeholder="{{$dealer->name}}">
                       
                    </div>

                    <div class="form-group">
                        <label for="rank">rank</label>
                        <input id="rank" type="text" class="form-control" disabled placeholder="{{$user->rank}}">
                        
                    </div>

                    <div class="form-group">
                        <label for="balance">balance</label>
                        <input id="balance" type="text" class="form-control" disabled placeholder="{{$user->balance}}">
                        
                    </div>


                    <div class="form-group">
                        <label for="bonus">bonus</label>
                        <input id="bonus" type="text" class="form-control"  disabled placeholder="{{$user->bonus}}">
                        
                    </div>


                    <div class="form-group">
                        <label for="carry">carry</label>
                        <input id="carry" type="text" class="form-control"  disabled placeholder="{{$user->carry}}">
                       
                    </div>

                    <div class="form-group">
                        <label for="pv">pv</label>
                        <input id="pv" type="text" class="form-control"  disabled placeholder="{{$user->pv}}">
                        
                    </div>

                    <div class="form-group">
                        <label for="Joining_date">Joining_date</label>
                        <input id="Joining_date" type="text" class="form-control" disabled   placeholder="{{date('d M, Y', strtotime($user->created_at))}}">
                       
                    </div>

                </form>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Contact Information</h4>
            <div class="card-body">
                <form class="" action="{{ url('admin/users/'.base64_encode($user->id).'/update-contact')}}" method="post" novalidate="">
                @csrf
                <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') parsley-error @enderror " required placeholder="Full name" value="{{$user->name}}">
                        <ul class="parsley-errors-list filled">
                        @error('name')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control @error('email') parsley-error @enderror" required placeholder="email" value="{{$user->email}}">
                        <ul class="parsley-errors-list filled">
                            @error('email')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="national_id">National id</label>
                        <input id="national_id" name="national_id" type="text" class="form-control @error('national_id') parsley-error @enderror" required placeholder="national_id" value="{{$user->national_id}}">
                        <ul class="parsley-errors-list filled">
                            @error('national_id')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input id="phone" name="phone" type="text" class="form-control @error('phone') parsley-error @enderror" required placeholder="phone" value="{{$user->phone}}">
                        <ul class="parsley-errors-list filled">
                            @error('phone')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="address">address</label>
                        <input id="address" name="address" type="text" class="form-control @error('address') parsley-error @enderror" required placeholder="address" value="{{$user->address}}">
                        <ul class="parsley-errors-list filled">
                            @error('address')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>
                   
                    <div class="form-group">
                        <label for="thana">thana</label>
                        <input id="thana" name="thana" type="text" class="form-control @error('thana') parsley-error @enderror" required placeholder="thana" value="{{$user->thana}}">
                        <ul class="parsley-errors-list filled">
                            @error('thana')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="district">district</label>
                        <input id="district" name="district" type="text" class="form-control @error('district') parsley-error @enderror" required placeholder="district" value="{{$user->district}}">
                        <ul class="parsley-errors-list filled">
                            @error('district')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="zip_code">zip_code</label>
                        <input id="zip_code" name="zip_code" type="text" class="form-control @error('zip_code') parsley-error @enderror" required placeholder="zip_code" value="{{$user->zip_code}}">
                        <ul class="parsley-errors-list filled">
                            @error('zip_code')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                        

                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->


    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Update Password</h4>
            <div class="card-body">
            <form class="" action="{{ url('admin/users/'.base64_encode($user->id).'/update-password')}}" method="post" novalidate="">
                @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" required placeholder="{{$user->username}}">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input id="email" type="text" class="form-control" required placeholder="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="password">new_password</label>
                        <input id="password" type="password" name="password" class="form-control @error('password') parsley-error @enderror" required placeholder="new_password" >
                        <ul class="parsley-errors-list filled">
                        @error('password')
                            <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">password_confirmation</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control @error('password_confirmation') parsley-error @enderror" required placeholder="password_confirmation">
                        <ul class="parsley-errors-list filled">
                            @error('password_confirmation')
                            <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                       
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Update Transaction Password</h4>
            <div class="card-body">

            <form class="" action="{{ url('admin/users/'.base64_encode($user->id).'/update-trans-pass')}}" method="post" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" required placeholder="{{$user->username}}">
                        
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input id="email" type="text" class="form-control" required placeholder="{{$user->email}}">
                        
                    </div>

                    <div class="form-group">
                        <label for="new_password">new_password</label>
                        <input id="new_password" name="transaction_password" type="password" class="form-control @error('transaction_password') parsley-error @enderror" required placeholder="new_password"">
                        <ul class="parsley-errors-list filled">
                            @error('transaction_password')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">confirm_password</label>
                        <input id="confirm_password" type="password" class="form-control @error('transaction_password_confirmation') parsley-error @enderror" required placeholder="confirm_password" name="transaction_password_confirmation">
                        <ul class="parsley-errors-list filled">
                            @error('transaction_password_confirmation')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                       
                    </div>

                </form>

            </div>
        </div>
    </div> <!-- end col -->

    
</div>

@stop
