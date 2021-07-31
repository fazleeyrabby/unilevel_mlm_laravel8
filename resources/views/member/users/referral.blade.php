@extends('layouts.member')

@section('title', 'User Details')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('member/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('member/dashboard')}}">Users</a></li>
                <li class="breadcrumb-item active">referral</li>
            </ol>
        </div>
        <h5 class="page-title">User Referrals</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    

        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">{{ $user->name}}</h4>
                <p class="text-muted m-b-30 font-14">
                    <code>Referral</code>
                </p>
                
               

                <div class="table-responsive">
                    <table id="users_table" class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>username</th>
                                <th>Name</th>
                                <th>Joining Date</th>
                                <th>Downline</th>
                                <th>Bonus</th>
                                <th>E wallet</th>
                                <th>Carry</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->total_sponsor}}</td>
                                <td>{{$user->total_bonus}}</td>
                                <td>{{$user->balance}}</td>
                                <td>{{$user->carry}}</td>
                                
                                <td>
                                <div class="button-items">
                                    <a class="btn btn-info btn-sm" href="{{ url('member/users/'.base64_encode($user->id * Auth::user()->id).'/profile') }}" role="button">Profile</a>
                                    <a class="btn btn-success btn-sm" href="{{ url('member/users/'.base64_encode($user->id * Auth::user()->id).'/bonus') }}" role="button">Bonus</a>
                                    <a class="btn btn-warning btn-sm" href="{{ url('member/users/'.base64_encode($user->id * Auth::user()->id).'/referral') }}" role="button">Referral</a>
                                    
                                </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@stop
