@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-info" href="/employee">Back</a>
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('employee.update', $employee->id)}}" method="POST">
                            @method('PATCH')
                            @csrf

                                <div class="form-group">
                                    <label for="First_Name">FirstName</label>
                                    <input type="text" class="form-control"  name="First_Name" value="{{$employee->First_Name}}" required autofocus>
                                    <br>

                                    <label for="Last_Name">LastName</label>
                                    <input type="text" class="form-control"  name="Last_Name" value="{{$employee->Last_Name}}" required autofocus>
                                    <br>

                                    <label for="Age">Age</label>
                                    <input type="integer" class="form-control"  name="Age" value="{{$employee->Age}}" required autofocus>
                                    <br>

                                    <label for="City">City</label>
                                    <input type="text" class="form-control"  name="City" value="{{$employee->City}}" required autofocus>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label for="Position">Position:</label>
                                    <select name="Position" id="Position">
                                        @foreach($arr_post as $arr_post)
                                            <option>{{$arr_post}}</option>
                                        @endforeach
                                    </select>                              
                                </div>  

                                <div class="form-group">
                                    <label for="Department">Department:</label>
                                    <select name="Department" id="Department">
                                        @foreach($arr_dept as $dept)
                                            <option>{{$dept->Department}}</option>
                                        @endforeach
                                    </select>                               
                                </div>
                                    
                                <div class="form-group">    
                                    <label for="Division">Division:</label>
                                    <select name="Division" id="Division">
                                        @foreach($arr_div as $arr_div)
                                            <option>{{$arr_div}}</option>
                                        @endforeach
                                    </select> 
                                    <br>
                                </div>    

                                    <div class="form-group">
                                        <label for="img" class="col-from-label">{{__('Employee Image')}}</label>
                                        <div>
                                            <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img">
                                            @error('img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                <br>
                                <input type="submit" class="btn button btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection