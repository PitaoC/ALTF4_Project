<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        echo $students;
    }

    /**
   

  
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $course = $request->course;
        $age = $request->age;


        $students = new Student;
        $students->firstname = $firstname;
        $students->lastname = $lastname;
        $students->course = $course;
        $students->age = $age;

        $students->save();

        echo "PM Sent";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
