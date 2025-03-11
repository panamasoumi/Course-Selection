@extends('layout.app')

@section('title', 'Add New Course')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Add New Course</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" name="course_code" class="form-control" required>
                @error('course_code')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" required>
                @error('course_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="units">Units</label>
                <input type="number" name="units" class="form-control" required>
                @error('units')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" name="semester" class="form-control" required>
                @error('semester')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
    </div>
</div>
@endsection

