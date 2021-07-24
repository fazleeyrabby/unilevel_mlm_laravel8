@extends('layouts.admin')

@section('title', 'User Details')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Packages</li>
            </ol>
        </div>
        <h5 class="page-title">Package List</h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
        <h4 class="mt-0 card-header header-title">Add new package</h4>
            <div class="card-body">

                <form class="" action="{{ route('packages.store') }}" method="POST" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') parsley-error @enderror " required placeholder="Package name" value="{{old('name')}}">
                        <ul class="parsley-errors-list filled">
                        @error('name')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="name">Point</label>
                        <input id="name" name="point" type="text" class="form-control @error('point') parsley-error @enderror " required placeholder="Point value" value="{{old('point')}}">
                        <ul class="parsley-errors-list filled">
                        @error('point')
                            <li class="parsley-required">{{$message}}</li>
                        @enderror
                        </ul>
                    </div>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                        

                    </div>

                </form>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Package Information</h4>
                

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Point Value</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php 
                            $i=0;
                        @endphp
                            @foreach ($packages as $package)
                            @php 
                                $i++;
                            @endphp
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{$package->name}}</td>
                                <td>{{$package->point}}</td>
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
