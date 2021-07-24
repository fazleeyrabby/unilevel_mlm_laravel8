@extends('layouts.member')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('member')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Transfer</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
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
            <div class="card-body">
                <h4 class="mt-0 header-title">Transfer wallet balance</h4>
                <p class="text-muted m-b-30 font-14">You are able to transfer balance to any members.
                </p>
                <form action="" novalidate="" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label>Transfer to(Username)</label>
                        <div>
                            <input type="text" name="receiver" value="{{old('receiver')}}" class="form-control @error('receiver') parsley-error @enderror" class="form-control parsley-error" required="" data-parsley-minlength="6" placeholder="Min 6 chars." data-parsley-id="29">
                            <ul class="parsley-errors-list filled" id="parsley-id-29">
                            @error('receiver')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <div>
                            <input type="text" name="amount" value="{{old('amount')}}" class="form-control @error('amount') parsley-error @enderror" class="form-control parsley-error" required="" data-parsley-maxlength="6" placeholder="Max 6 chars." data-parsley-id="31">
                            <ul class="parsley-errors-list filled" id="parsley-id-31">
                            @error('amount')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label>Transaction password:</label>
                        <div>
                            <input name="transaction_password" type="text" class="form-control @error('transaction_password') parsley-error @enderror"  required="" data-parsley-min="6" placeholder="Min value is 6" data-parsley-id="35">
                            <ul class="parsley-errors-list filled" id="parsley-id-35">
                            @error('transaction_password')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction confirm password:</label>
                        <div>
                            <input name="confirm_transaction_password" type="text" class="form-control @error('confirm_transaction_password') parsley-error @enderror"  required="" data-parsley-max="6" placeholder="Max value is 6" data-parsley-id="37">
                            <ul class="parsley-errors-list filled" id="parsley-id-37">
                            @error('confirm_transaction_password')
                                <li class="parsley-required">{{$message}}</li>
                            @enderror
                            </ul>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop