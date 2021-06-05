@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('employee.store')}}" method="POST" enctype= "multipart/form-data">
                            @csrf
                                <label for="First_Name">First Name:</label>
                                <input type="text" class="form-control @error('First_Name') is-invalid @enderror" name="First_Name" value="{{ old('First_Name')}}">
                                @error('First_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                                <label for="Last_Name">Last Name:</label>
                                <input type="text" class="form-control @error('Last_Name') is-invalid @enderror" name="Last_Name" value="{{ old('Last_Name')}}">
                                @error('Last_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                                <label for="Age">Age:</label>
                                <input type="integer" class="form-control @error('Age') is-invalid @enderror" name="Age" value="{{ old('Age')}}">
                                @error('Age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                                <label for="City">City:</label>
                                <input type="text" class="form-control @error('City') is-invalid @enderror" name="City" value="{{ old('City')}}">
                                @error('City')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                                <label for="Position">Position:</label>
                                    <select name="Position" id="Position">
                                        @foreach($arr_post as $arr_post)
                                            <option>{{$arr_post}}</option>
                                        @endforeach
                                    </select>
                                <br>

                                <label for="Department">Department:</label>
                                    <select name="Department" id="Department">
                                        @foreach($arr_dept as $dept)
                                            <option>{{$dept->Department}}</option>
                                        @endforeach
                                    </select>
                                <br>    
                                
                                <label for="Division">Division:</label>
                                <select name="Division" id="Division">
                                    @foreach($arr_div as $arr_div)
                                        <option>{{$arr_div}}</option>
                                    @endforeach
                                </select>    
                                <br>
                             
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
                                <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection