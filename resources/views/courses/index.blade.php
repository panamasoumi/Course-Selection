<!-- resources/views/courses/index.blade.php -->
@extends('layout.app')

@section('title', 'Courses')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Courses List</h3>
    </div>
    <div class="card-body">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Units</th>
                    <th>Semester</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->units }}</td>
                    <td>{{ $course->semester }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('courses.create') }}" class="btn btn-success">Add New Course</a>
    </div>
</div>
@endsection

