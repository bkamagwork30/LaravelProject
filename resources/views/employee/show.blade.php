@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-info" href="/employee">Back</a>
                <br><br>
                <div class="card w-100">
                    @isset($employee)
                    <div class="card-body p-3 m-3 ">
                        <strong>Profile:</strong><br><img style="width:200px; height:200px;" src="{{ asset('/storage/img/'.$employee->img) }}" alt="No image found"><br><br>
                        <strong>First Name:</strong> {{$employee->First_Name}} <br>
                        <strong>Last Name:</strong> {{$employee->Last_Name}} <br>
                        <strong>Age:</strong> {{$employee->Age}} <br>
                        <strong>City:</strong> {{$employee->City}} <br>
                        <strong>Position:</strong> {{$employee->Position}} <br>
                        <strong>Department:</strong> {{$employee->Department}} <br>
                        <strong>Division:</strong> {{$employee->Division}} <br>
                        <strong>Created At:</strong> {{$employee->created_at}} 
                        {{-- <img class="img-fluid" src="{{ asset('/storage/img/'.$employee->img) }}" alt="No image found">  --}}
                        <br>                 
                    @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection