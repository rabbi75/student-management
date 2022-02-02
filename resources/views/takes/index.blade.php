@extends('master')
@section('content')
<div class="container">
    <h3>Takes List</h3>
    <button class="btn btn-info" ><a href="{{route('taks.create')}}">Add Takes</a></button>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Duration Name</th>
            <th scope="col">Mark</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
        @foreach ($information as $informations)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ !empty($studentName= \App\Models\Student::find($informations->student_id)) ? $studentName->name : 'N/A' }}</td>
            <td>{{ $informations->course->coursename }}</td>
            <td>{{ $informations->duration->name }}</td>
            <td>{{ $informations->mark }}</td>
            <td>
                <a href="{{ route('student.show', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user ml-2"></i>
                </a>
                <a href="{{ route('takes.edit', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user-edit ml-2"></i>
                </a>
                <a href="{{ route('takes.delete', $informations->id) }}" class="btn btn-primary">
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
