@extends('layouts.dealer')

@section('title', 'User Details')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/users')}}">Users</a></li>
                <li class="breadcrumb-item active">referral</li>
            </ol>
        </div>
        <h5 class="page-title">User Bonus</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    

        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">{{ $user->name}}</h4>
                <p class="text-muted m-b-30 font-14">
                   <!--  Use <code>.table-striped</code> to add zebra-striping to any table row
                    within the <code>&lt;tbody&gt;</code>. -->
                    <code>Bonus</code>
                </p>
                
               

                <div class="table-responsive">
                    <table id="users_table" class="table table-striped mb-0">
                        <thead>
                            <tr>
                               
                                <th>Type</th>
                                <th>Amount</th>
                                <th>user</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($bonus as $earn)
                            <tr>
                                <td>{{$earn->type}}</td>
                                <td>{{$earn->amount}}</td>
                                <td> <a href="{{ url('admin/users/'.base64_encode($earn->user->id).'/profile') }}">{{$earn->user->name}} </a></td>
                                <td>{{date('H:m  d M, Y', strtotime($earn->created_at))}}</td>
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
@section('script')
    $(document).ready(function() {
        $('#users_table').DataTable();
    } );
@stop