@extends('master')
@section('content')
    <div class="container">
        <form action="{{ route('student.update',$information->id ) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$information->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SureName</label>
                <input type="text" name="surename" value="{{$information->surename}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">StudentId</label>
                <input type="text" name="studentid" value="{{$information->studentid}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date of birth</label>
                <input type="date" name="date_of_birth" value="{{$information->date_of_birth}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date of birth">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Year enrolled</label>
                <input type="date" name="date_of_enrolled" value="{{$information->date_of_enrolled}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Year enrolled">
            </div>
            <div class="form-group">
                <label for="oldimage">Old Image</label></br>
                <img src="{!! asset('images/'. $information->image) !!}" width="100" height="100"></br>
                <label for="oldimage">New Image (optional)</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
