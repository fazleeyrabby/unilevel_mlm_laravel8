@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dealer/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Income Report</li>
            </ol>
        </div>
        <h5 class="page-title">Income Report</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    

        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Income Report</h4>
                <p class="text-muted m-b-30 font-14">
                    All type of income of a dealer
                </p>
                <div class="table-responsive">
                    <table id="users_table" class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Reference</th>
                                <th>User</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Balance</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td><a href="{{ url('admin/users/'.base64_encode($transaction->reference ? $transaction->reference->id: Auth::user()->id).'/profile') }}">{{$transaction->reference ? $transaction->reference->name : '--'}}</a></td>
                                <td><a href="{{ url('admin/users/'.base64_encode($transaction->user ? $transaction->user->id: Auth::user()->id).'/profile') }}">{{$transaction->user ? $transaction->user->name : '--'}}</a></td>
                                <td>{{$transaction->type}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->user_balance}}</td>
                                <td> {{date('d M, Y h:i:s a', strtotime($transaction->created_at))}} </td>
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
        $('#users_table').DataTable({
            "order": [[ 0, 'desc' ]]
        });
    } );
@stop