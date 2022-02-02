@extends('master')
@section('content')
<div class="container">
    <h3>Student List</h3>
    <button class="btn btn-info" ><a href="{{route('student.create')}}">Add Student</a></button>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Student ID</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Date of Enroll</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
        @foreach ($information as $informations)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $informations->name }}</td>
            <td>{{ $informations->studentid }}</td>
            <td>{{ $informations->date_of_birth }}</td>
            <td>{{ $informations->date_of_enrolled }}</td>
            <td><img src="{{ asset('images/'.$informations->image) }}" style="width: 80px;" ></td>
            <td>
                <a href="{{ route('student.show', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user ml-2"></i>
                </a>
                <a href="{{ route('student.edit', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user-edit ml-2"></i>
                </a>
                <a href="{{ route('student.delete', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user-times ml-2"></i>
                </a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
    <div class="row" style="overflow: hidden; height: 30px;">
        {{ $information->links() }}
    </div>
</div>

@endsection
