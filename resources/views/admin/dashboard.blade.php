@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0"> User</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Today : {{ $today_user }}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">Total: {{Auth::user()->downline }}</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Dealers</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Sub dealer : {{ $sub_dealers}}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">Dealer: {{ $dealers}}</h5>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Income</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Today : {{ $todays_income}}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">This Month : {{ $this_month_income}}</h5>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Income</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Last Month : {{ $last_month_income}}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">This Year : {{ $this_year_income}}</h5>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Recent members</h4>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>District</th>
                                <th>Join</th>
                            </tr>

                        </thead>
                       
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->district}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop