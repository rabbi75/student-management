@extends('master')
@section('content')
    <div class="container">
        <form action="{{ route('course.update',$information->id ) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Course Name</label>
                <input type="text" name="coursename" value="{{$information->coursename}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
@endsection
