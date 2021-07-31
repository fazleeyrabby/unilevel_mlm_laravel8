@extends('layouts.dealer')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dealer/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Transaction Report</li>
            </ol>
        </div>
        <h5 class="page-title">Users</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    

        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">All Funds</h4><br>
                <!-- <p class="text-muted m-b-30 font-14">
                  <code></code>
                </p> -->
                
               

                <div class="table-responsive">
                    <table id="users_table" class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Amount</th>
                                <th>New balance</th>
                                <th>Type</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td><a href="{{ url('admin/users/'.base64_encode($transaction->sender->id).'/profile') }}">{{$transaction->sender->username}}</a></td>
                                <td><a href="{{ url('admin/users/'.base64_encode($transaction->receiver->id).'/profile') }}"> {{$transaction->receiver->username}}</a></td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->receiver->username == Auth::user()->username ? $transaction->receiver_balance : $transaction->sender_balance }}</td>
                                <td>{{$transaction->receiver->username == Auth::user()->username ? 'Receive' : $transaction->type}}</td>
                                <td>{{$transaction->created_at}}</td>
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