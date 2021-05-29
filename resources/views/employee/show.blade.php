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
                        {{-- <strong>Created At:</strong> {{$employee->created_at}}  --}}
                        {{-- <img class="img-fluid" src="{{ asset('/storage/img/'.$employee->img) }}" alt="No image found">  --}}
                        <br>
                        {{-- @if ($comments)
                        <span class="badge badge-pill badge-warning h3">Comments:</span><br>
                        @foreach ($comments as $comment)
                            <div class="display-comment" >
                                <p>{{ $comment->description }}</p>
                                <a href="" id="reply"></a>
                                <form method="post" action="{{ route('comments.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="description" class="form-control" />
                                        <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-warning" value="Reply" />
                                    </div>
                                </form>
                            </div>
                        @endforeach                            
                    @endif
                    <form method="post" action="{{ route('comments.store') }}">  
                        @csrf
                       
                        <span class="badge badge-pill badge-warning h3">Comment:</span><br>

                           <div class="col-md-6">
                               <input id="description" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                               <input type="hidden" name="post_id" value="{{ $show->id }}">        
                               
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                           <br>
                           <br>
                           <div class="form-group col-8 m-auto">
                                <input type="submit" class="btn btn-block btn-outline-primary custom-btn" value="Add Comment">
                           </div>
                      </form> --}}
                    @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection