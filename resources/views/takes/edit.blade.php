@extends('master')
@section('content')
    <div class="container">
    <form action="{{ route('takes.update',$take->id ) }}" method="post">
            @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">Select Student</label>
                <select class="form-select" aria-label="Default select example" name="student_id">
                    <option selected disabled>Please Select</option>
                    @foreach($students as $student)
                    <option value="{{$student->id}}" @if($take->student_id == $student->id) selected @endif>{{$student->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Select Course</label>
                <select class="form-select" aria-label="Default select example" name="course_id">
                    <option selected disabled>Please Select</option>
                    @foreach($courses as $course)
                    <option value="{{$course->id}}" @if($take->course_id ==$course->id) selected @endif >{{$course->coursename}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Select Duration</label>
                <select class="form-select" aria-label="Default select example" name="duration_id">
                    <option selected disabled>Please Select</option>
                    @foreach($durations as $duration)
                    <option value="{{$duration->id}}" @if($take->duration_id == $duration->id) selected @endif>{{$duration->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mark</label>
                <input type="number" name="mark" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$take->mark}}">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
