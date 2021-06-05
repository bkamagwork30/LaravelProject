@extends('layouts.app')
@prepend('scripts')
    <script ></script>
@endprepend 
@section('content')
    
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <a class="navbar-brand ml-5" id="dept" href="{{ url('/department') }}">
            Departments
        </a>
      </ul>
        <div class="row justify-content-center">
          {{-- <form method="GET" class="form-inline my-2 my-lg-0" action="{{ route('employee.search') }}" enctype="multipart/form-data">
            @csrf

                <input id="str" type="search" class="form-control" name="str" value="{{ old('str') }}"   autofocus>
                <button class="btn btn-outline-success my-2 my-sm-0 ml-3 mt-5" type="submit">Search</button>
                
          </form>
          <div class="col-md-12 text-right">
            <a class="mj_btn btn btn-success" href="/employee/create">Add New Employee</a>
          </div> --}}
            <div class="col-md-12">
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                {{-- <th scope="col">Image</th> --}}
                                <th scope="col">ID</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                {{-- <th scope="col">Age</th> --}}
                                {{-- <th scope="col">City</th> --}}
                                <th scope="col">Position</th>
                                <th scope="col">Department</th>
                                <th scope="col">Division</th>
                                <th scope="col"></th>
                                <th scope="col">Actions</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($employee as $employee)
                                  <tr>
                                        {{-- <td>{{$employee->img}}</td> --}}
                                        <td>{{$employee->id}}</td>
                                        <td>{{$employee->First_Name}}</td>
                                        <td>{{$employee->Last_Name}}</td>
                                        {{-- <td>{{$employee->Age}}</td>
                                        <td>{{$employee->City}}</td> --}}
                                        <td>{{$employee->Position}}</td>
                                        <td>{{$employee->Department}}</td>
                                        <td>{{$employee->Division}}</td>  

                                        <td><a href="/employee/{{$employee->id}}" class="btn btn-info">View</a></td>
                                        <td><a href="/employee/{{$employee->id}}/edit" class="btn btn-warning">Edit</a></td>
                                        <td><form action="{{route('employee.destroy', $employee->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                          </form>
                                        </td>
                                  </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection