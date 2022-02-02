@extends('master')
@section('content')
    <div class="container">
        <h3>Add Student</h3>
        <hr>
        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Surname</label>
                <input type="text" name="surename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surename">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Student Id</label>
                <input type="text" name="studentid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date of birth</label>
                <input type="date" name="date_of_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date of birth">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Year enrolled</label>
                <input type="date" name="date_of_enrolled" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Year enrolled">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Image">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
