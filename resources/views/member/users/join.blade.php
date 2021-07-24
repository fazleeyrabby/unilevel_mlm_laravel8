@extends('layouts.member')
@section('title', 'Add new user')
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
    @foreach($packages as $package)
    <div class="col-xl-3">
        <div class="card m-b-30 text-white bg-success">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>{{ $package->name }}</p>
                    <footer class="text-white font-14">
                        <h1>{{ $package->point}}</h1>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    @endforeach
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
            <h4 class="mt-0 card-header header-title">Profile Information</h4>
            <div class="card-body">
                <form class="" action="" method="post" novalidate=""  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" value="{{old('username')}}" class="form-control @error('username') parsley-error @enderror" required>
                        <ul class="parsley-errors-list filled">
                            @error('username')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                        <small class="form-text text-muted">You will no longer be able to change your name after registration.</small>
                    </div>
                    <div class="form-group">
                        <label for="package">Package</label>
                        <select class="form-control @error('package') parsley-error @enderror" id="package" name="package">
                            <option value=""> -- Select Package --</option>
                            @foreach($packages as $package)
                            <option {{ old('package') == $package->package_id ? "selected" : "" }} value="{{ $package->package_id }}">{{ $package->name }}</option>
                            @endforeach
                        </select>
                        <ul class="parsley-errors-list filled">
                            @error('package')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                        <small class="form-text text-muted">You will no longer be able to change your name after registration.</small>
                    </div>
                    <div class="form-group">
                        <label for="sponsor_id">Sponsor ID</label>
                        <input id="sponsor_id" name="sponsor" type="text" class="form-control @error('sponsor') parsley-error @enderror" required placeholder="sponsor_id" value="{{ old('sponsor') }}">
                        <ul class="parsley-errors-list filled">
                            @error('sponsor')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Placement ID</label>
                        <input id="parent_id" name="parent" value="{{old('parent')}}" type="text" class="form-control @error('parent') parsley-error @enderror" required >
                        <ul class="parsley-errors-list filled">
                            @error('parent')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                        </ul>
                        <small class="form-text text-muted">You will no longer be able to change your name after registration.</small>
                    </div>
                    <div class="form-group">
                        <label for="position">position</label>
                        <select class="form-control @error('position') parsley-error @enderror" id="position" name="position" value="{{old('position')}}" >
                            <option value=""> -- Select Position --</option>
                            @php
                                $p = isset($_GET['p'])?$_GET['p']:'' ;
                            @endphp
                            <option {{ old('position') == 1 || $p == 1 ? "selected" : "" }} value="1">1 </option>
                            <option {{ old('position') == 2 || $p == 2 ?  "selected" : "" }} value="2">2</option>
                            <option {{ old('position') == 3 || $p == 3 ? "selected" : "" }} value="3">3</option>
                            <option {{ old('position') == 4 || $p == 4 ? "selected" : "" }} value="4">4</option>
                            <option {{ old('position') == 5 || $p == 5 ? "selected" : "" }} value="5">5</option>
                            <option {{ old('position') == 6 || $p == 6 ? "selected" : "" }} value="6">6</option>
                            <option {{ old('position') == 7 || $p == 7 ? "selected" : "" }} value="7">7</option>
                            <option {{ old('position') == 8 || $p == 8 ? "selected" : "" }} value="8">8</option>
                            <option {{ old('position') == 9 || $p == 9 ? "selected" : "" }} value="9">9</option>
                            <option {{ old('position') == 10 || $p == 10 ? "selected" : "" }} value="10">10</option>
                        </select>
                        <ul class="parsley-errors-list filled">
                        @error('position')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                        <small class="form-text text-muted">You will no longer be able to change your name after registration.</small>
                    </div>
                    <div class="form-group">
                        <label for="dealer_code">Dealer code</label>
                        <input id="dealer_code" type="text" value="{{old('dealer_code')}}" name="dealer_code"class="form-control @error('dealer_code') parsley-error @enderror" required placeholder="dealer_code" >
                        <ul class="parsley-errors-list filled">
                        @error('dealer_code')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <h4 class="mt-0 card-header header-title">Contact Information</h4>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{old('name')}}" class="form-control @error('name') parsley-error @enderror" required placeholder="Full name">
                    <ul class="parsley-errors-list filled">
                    @error('name')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control @error('email') parsley-error @enderror" required placeholder="email" value="{{old('email')}}" >
                    <ul class="parsley-errors-list filled">
                    @error('email')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="national_id">National id</label>
                    <input id="national_id" name="national_id" type="text" class="form-control @error('national_id') parsley-error @enderror" required placeholder="national_id" value="{{old('national_id')}}">
                    <ul class="parsley-errors-list filled">
                    @error('national_id')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input id="phone" name="phone" type="text" class="form-control @error('phone') parsley-error @enderror" required placeholder="phone" value="{{old('phone')}}">
                    <ul class="parsley-errors-list filled">
                    @error('phone')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input id="address" name="address" type="text" class="form-control @error('address') parsley-error @enderror" required placeholder="address" value="{{old('address')}}">
                    <ul class="parsley-errors-list filled">
                    @error('address')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="thana">thana</label>
                    <input id="thana" name="thana" ype="text" class="form-control @error('thana') parsley-error @enderror" required placeholder="thana" value="{{old('thana')}}">
                    <ul class="parsley-errors-list filled">
                        @error('thana')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="district">district</label>
                    <input id="district" name="district" type="text" class="form-control @error('district') parsley-error @enderror" required placeholder="district" value="{{old('district')}}">
                    <ul class="parsley-errors-list filled">
                        @error('district')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="zip_code">zip_code</label>
                    <input id="zip_code" name="zip_code" type="text" class="form-control @error('zip_code') parsley-error @enderror" required placeholder="zip_code" value="{{old('zip_code')}}">
                    <ul class="parsley-errors-list filled">
                        @error('zip_code')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- end col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <h4 class="mt-0 card-header header-title"> Password</h4>
            <div class="card-body">
                <div class="form-group">
                    <label for="new_password">Password</label>
                    <input id="new_password" placeholder="Password" name="password" type="password" class="form-control @error('password') parsley-error @enderror" required  >
                    <ul class="parsley-errors-list filled">
                        @error('password')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" placeholder="Confirm Password" name="confirm_password" type="password" class="form-control @error('confirm_password') parsley-error @enderror" required  >
                    <ul class="parsley-errors-list filled">
                        @error('confirm_password')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- end col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <h4 class="mt-0 card-header header-title"> Transaction Password</h4>
            <div class="card-body">
                <div class="form-group">
                    <label for="new_password">Transaction password</label>
                    <input id="new_password" name="transaction_password" type="password" class="form-control @error('transaction_password') parsley-error @enderror" required  >
                    <ul class="parsley-errors-list filled">
                        @error('transaction_password')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                    </ul>
                </div>
                <div class="form-group">
                    <label for="confirm_password">confirm Transaction password</label>
                    <input id="confirm_password" name="confirm_transaction_password" type="password" class="form-control @error('confirm_transaction_password') parsley-error @enderror" required  >
                    <ul class="parsley-errors-list filled">
                        @error('confirm_transaction_password')
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
    </div>
    <!-- end col -->
</div>
@stop