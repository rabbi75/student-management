@extends('master')
@section('content')
    <div class="container">
        <h3>Add Course</h3>
        <hr>
        <form action="{{ route('course.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Course Name</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Course Name">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
