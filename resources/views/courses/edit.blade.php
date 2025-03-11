<!-- resources/views/courses/edit.blade.php -->

@extends('layout.app')

@section('title', 'Edit Course')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Course</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- This is required to make the form a PUT request -->
            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}" required>
            </div>
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}" required>
            </div>
            <div class="form-group">
                <label for="units">Units</label>
                <input type="number" name="units" class="form-control" value="{{ $course->units }}" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" name="semester" class="form-control" value="{{ $course->semester }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Course</button>
        </form>
    </div>
</div>
@endsection

