@extends('master')
@section('content')

<div class="container">
        <h2 class="text-center text-info">
            Student Information
            <hr/>
        </h2>

        <br />
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                        <div class="col-md-3">
                            <img style="height: 150px;" src="{!! asset('images/'. $information->image) !!}" class="img-thumbnail">
                        </div>

                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Student ID</td>
                                    <td>:</td>
                                    <td>{{$information->studentid}}</td>
                                </tr>
                                <tr>
                                    <td>Student Name</td>
                                    <td>:</td>
                                    <td>{{$information->name}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td>{{$information->date_of_birth}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Enroll</td>
                                    <td>:</td>
                                    <td>{{$information->date_of_enrolled}}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <br>
                <h2 class="text-center text-info">
                    Course Details:
                    <hr/>
                </h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Duration Name</th>
                            <th scope="col">Mark</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach ($shows as $show)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ !empty($studentName= \App\Models\Student::find($show->student_id)) ? $studentName->name : 'N/A' }}</td>
                            <td>{{ $show->course->coursename }}</td>
                            <td>{{ $show->duration->name }}</td>
                            <td>{{ $show->mark }}</td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
