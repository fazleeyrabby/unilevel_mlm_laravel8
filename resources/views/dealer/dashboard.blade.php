@extends('layouts.dealer')

@section('title', 'Dashboard')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dealer')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0"> Dealer Code</h6>
            </div>
            <div class="card-body">
                
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">My code: {{Auth::user()->dealer_id }}</h5>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Downlines</h6>
            </div>
            <div class="card-body">
                <div class="mt-4 text-muted">
                    <h5 class="m-0">{{Auth::user()->downline }}</h5>
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

    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Bonus</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Current : {{ Auth::user()->bonus}}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">Total: {{ Auth::user()->total_bonus +  Auth::user()->bonus }}</h5>
                    
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
                <h6 class="text-uppercase mb-0">E-Wallet</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Current : {{ Auth::user()->balance}}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">Total: {{ Auth::user()->balance +  Auth::user()->total_balance }}</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cart-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Carry</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                <p class="m-0">Current : {{ Auth::user()->carry }}</p>
                </div>
                <div class="mt-4 text-muted">
                   
                    <h5 class="m-0">Total: {{ Auth::user()->carry +  Auth::user()->total_carry }}</h5>
                    
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
                <h4 class="mt-0 header-title mb-4">Recent earnings</h4>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Bonus Type</th>
                                <th>Amount</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>District</th>
                                <th>Thana</th>
                                <th>Time</th>
                            </tr>

                        </thead>
                       
                        <tbody>
                        @foreach($earnings as $earning)
                            <tr>
                                <td>{{$earning->type}}</td>
                                <td>{{$earning->amount }}</td>
                                <td><a href="{{ url('dealer/users/'.base64_encode($earning->user->id * Auth::user()->id).'/profile') }}"> {{$earning->user->name}}</a></td>
                                <td>{{$earning->user->phone}}</td>
                                <td>{{$earning->user->district}}</td>
                                <td>{{$earning->user->thana}}</td>
                                <td>{{$earning->created_at->diffForHumans()}}</td>
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