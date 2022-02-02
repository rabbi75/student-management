@extends('master')
@section('content')
<div class="container">
    <h3>Course List</h3>
    <button class="btn btn-info" ><a href="{{route('course.create')}}">Add Course</a></button>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
        @foreach ($information as $informations)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $informations->coursename }}</td>
            <td>
                <a href="{{ route('course.show', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user ml-2"></i>
                </a>
                <a href="{{ route('course.edit', $informations->id) }}" class="btn btn-primary">
                    <i class="fas fa-user-edit ml-2"></i>
                </a>
                <a href="{{ route('course.delete', $informations->id) }}" class="btn btn-primary">
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
