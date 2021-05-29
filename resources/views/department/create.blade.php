@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('department.store')}}" method="POST" enctype= "multipart/form-data">
                            @csrf
                                <label for="Department">Department</label>
                                <input type="text" class="form-control @error('Department') is-invalid @enderror" name="Department" value="{{ old('Department')}}">
                                @error('Department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                                            
                                <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection