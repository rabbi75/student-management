@extends('master')
@section('content')
    <div class="container">
        <form action="{{ route('course.index') }}">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="email" value="{{$information->coursename}}" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary mt-2">OK</button>
        </form>
    </div>
@endsection
