@extends('layouts.member')
@section('title', 'User genealogy')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/orgchart/jquery.orgchart.css') }}">
<link href="{{ asset('assets/css/genealogy.css') }}" rel="stylesheet" type="text/css">
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('member/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('member/users')}}">Users</a></li>
                <li class="breadcrumb-item active">referral</li>
            </ol>
        </div>
        <h5 class="page-title">User Referrals</h5>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body genealogy-body">
                <div class="genealogy-items" style="display: none">
                    <ul id="organisation">
                        <li>
                            <div class="single-genealogy">
                                <div class="single-genealogy-front">
                                    <img src="{{ asset('assets/orgchart/img/user-level.png') }}" alt="User">
                                    <h4>{{$root->name}}</h4>
                                </div>

                                <div class="single-genealogy-hover">
                                    <p>Username: {{$root->username}}</p>
                                    <p>Join Date: {{$root->created_at}}</p>
                                    <p>Balance Amount: {{$root->balance}}</p>
                                    <p>Total PV: {{$root->total_pv}}</p>
                                </div>
                            </div>
                            <ul>
                                {!! $liHTML !!}
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="genealogy-chart">
                    <div id="main"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
    $(function() {
    $("#organisation").orgChart({container: $("#main")});
    });
@stop