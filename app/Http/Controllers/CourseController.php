<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'course_name'=> 'required|string|max:255',
            'course_code'=> 'required|string|max:255',
            'unit'=> 'required|integer|min:1',
            'semester'=> 'required|integer',
        ]);
        //dd('Validation passed.');
       // dd($request->all());
        Course::create([
            'course_code' => request()->get('course_code'),
            'course_name' => request()->get('course_name'),
            'units' => request()->get('units'),
            'semester' => request()->get('semester'),
        ]);
       
        return redirect()->route('courses.index')->with('success','course added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name'=> 'required|string|max:255',
            'course_code'=> 'required|string|max:255',
            'unit'=> 'required|integer|min:1',
            'semester'=> 'required|integer',
        ]);

        $course->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success','course deleted');

    }
}
