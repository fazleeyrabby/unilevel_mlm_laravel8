@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </div>
        <h5 class="page-title">Users</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    

        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Striped rows</h4>
                <p class="text-muted m-b-30 font-14">
                    Use <code>.table-striped</code> to add zebra-striping to any table row
                    within the <code>&lt;tbody&gt;</code>.
                </p>
                
               

                <div class="table-responsive">
                    <table id="users_table" class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
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
                                <th scope="row">1</th>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->total_sponsor}}</td>
                                <td>{{$user->total_bonus}}</td>
                                <td>{{$user->balance}}</td>
                                <td>{{$user->carry}}</td>
                                
                                <td>
                                <div class="button-items">
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/users/'.base64_encode($user->id).'/profile') }}" role="button">Profile</a>
                                    <a class="btn btn-success btn-sm" href="#" role="button">Bonus</a>
                                    <a class="btn btn-warning btn-sm" href="#" role="button">Wallet</a>
                                    <a class="btn btn-danger btn-sm" href="#" role="button">Referral</a>
                                    
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

@section('script')
    $(document).ready(function() {
        $('#users_table').DataTable();
    } );
@stop