<!-- resources/views/courses/show.blade.php -->

@extends('layout.app')

@section('title', 'Course Details')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Course Details</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Course Code</th>
                <td>{{ $course->course_code }}</td>
            </tr>
            <tr>
                <th>Course Name</th>
                <td>{{ $course->course_name }}</td>
            </tr>
            <tr>
                <th>Units</th>
                <td>{{ $course->units }}</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>{{ $course->semester }}</td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('courses.index') }}" class="btn btn-primary">Back to Course List</a>
    </div>
</div>
@endsection

