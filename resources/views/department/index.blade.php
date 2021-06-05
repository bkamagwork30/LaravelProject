@extends('layouts.app')
@prepend('scripts')
    <script ></script>
@endprepend 
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
          {{-- <form method="GET" class="form-inline my-2 my-lg-0" action="{{ route('employee.search') }}" enctype="multipart/form-data">
            @csrf
                <input id="str" type="search" class="form-control" name="str" value="{{ old('str') }}"   autofocus>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>                
          </form> --}}
          <div class="col-md-12 text-right">
            <a class="mj_btn btn btn-success" href="/department/create">Add New Department</a>
          </div>
            <div class="col-md-8">
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                {{-- <th scope="col">Image</th> --}}
                                <th scope="col">ID</th>
                                <th scope="col">Department</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($departments as $department)
                                  <tr>
                                        {{-- <td>{{$employee->img}}</td> --}}
                                        <td>{{$department->id}}</td>
                                        <td>{{$department->Department}}</td>

                                        <td><a href="/department/{{$department->id}}" class="btn btn-info">View</a></td>
                                        <td><a href="/department/{{$department->id}}/edit" class="btn btn-warning">Edit</a></td>
                                        <td><form action="{{route('department.destroy', $department->id)}}" method="POST">
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