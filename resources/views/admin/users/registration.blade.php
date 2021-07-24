@extends('layouts.admin')

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
                        <input id="username" type="text" class="form-control" required placeholder="{{$user->username}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="sponsor_id">sponsor_id</label>
                        <input id="sponsor_id" type="text" class="form-control parsley-error" required placeholder="sponsor_id" value="{{$user->sponsor_id}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="dealer_code">dealer_code</label>
                        <input id="dealer_code" type="text" class="form-control parsley-error" required placeholder="dealer_code" value="{{$user->dealer_code}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="rank">rank</label>
                        <input id="rank" type="text" class="form-control parsley-error" required placeholder="rank" value="{{$user->rank}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="balance">balance</label>
                        <input id="balance" type="text" class="form-control parsley-error" required placeholder="balance" value="{{$user->balance}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>


                    <div class="form-group">
                        <label for="bonus">bonus</label>
                        <input id="bonus" type="text" class="form-control parsley-error" required placeholder="bonus" value="{{$user->bonus}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>


                    <div class="form-group">
                        <label for="carry">carry</label>
                        <input id="carry" type="text" class="form-control parsley-error" required placeholder="carry" value="{{$user->carry}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="pv">pv</label>
                        <input id="pv" type="text" class="form-control parsley-error" required placeholder="pv" value="{{$user->pv}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="Joining_date">Joining_date</label>
                        <input id="Joining_date" type="text" class="form-control parsley-error" required placeholder="Joining_date" value="{{$user->created_at}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                </form>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Contact Information</h4>
            <div class="card-body">
                <form class="" action="#" novalidate="">
                <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control parsley-error" required placeholder="Full name" value="{{$user->name}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control parsley-error" required placeholder="email" value="{{$user->email}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="national_id">National id</label>
                        <input id="national_id" type="text" class="form-control parsley-error" required placeholder="national_id" value="{{$user->national_id}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input id="phone" type="text" class="form-control parsley-error" required placeholder="phone" value="{{$user->phone}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="address">address</label>
                        <input id="address" type="text" class="form-control parsley-error" required placeholder="address" value="{{$user->address}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>
                   
                    <div class="form-group">
                        <label for="thana">thana</label>
                        <input id="thana" type="text" class="form-control parsley-error" required placeholder="thana" value="{{$user->thana}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="district">district</label>
                        <input id="district" type="text" class="form-control parsley-error" required placeholder="district" value="{{$user->district}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="zip_code">zip_code</label>
                        <input id="zip_code" type="text" class="form-control parsley-error" required placeholder="zip_code" value="{{$user->zip_code}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
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
                <form class="" action="#" novalidate="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" required placeholder="{{$user->username}}">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input id="email" type="text" class="form-control" required placeholder="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input id="new_password" type="text" class="form-control parsley-error" required placeholder="New Password" value="{{$user->sponsor_id}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input id="confirm_password" type="text" class="form-control parsley-error" required placeholder="Confirm Password" value="{{$user->dealer_code}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
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

                <form class="" action="#" novalidate="">
                    
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
                        <input id="new_password" type="text" class="form-control parsley-error" required placeholder="new_password" value="{{$user->sponsor_id}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">confirm_password</label>
                        <input id="confirm_password" type="text" class="form-control parsley-error" required placeholder="confirm_password" value="{{$user->dealer_code}}">
                        <ul class="parsley-errors-list filled">
                            <li class="parsley-required">This value is required.</li>
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