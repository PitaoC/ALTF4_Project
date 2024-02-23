<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\student;
use App\Models\studentcourse;

class StudentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::join('student_courses','students.id','=','student_courses.student_id')
        ->select('students.*','student_courses.*')
        ->where('students.id','=',1)->get();
        echo $students;
        // $students = Student::all();
        // echo $students;
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $student = Student::join('student_courses','students.id','=','student_courses.student_id')
        // ->select('students.*','student_courses.*')
        // ->where('students.id','=',$id)->first();
        // $course_id=$student->course_id;
        
        
        $student = StudentCourse::join('students','student_courses.student_id','=','students.id')
        ->join('courses','student_courses.courses_id','=','courses.id')
        ->select('courses.*','students.*','student_courses.*')
        ->where('students.id','=',$id)->first();

        echo $student;

    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
