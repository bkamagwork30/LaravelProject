@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-info" href="/department">Back</a>
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('department.update', $department->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                                <div class="form-group">
                                    <label for="Department">Department</label>
                                    <input type="text" class="form-control"  name="Department" value="{{$department->Department}}" required autofocus>
                                    <br>
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