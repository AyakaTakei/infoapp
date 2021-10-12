<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return view('Students.index')->with(['students' => $student->get()]);
    }
    
    public function create(Student $student)
    {
        return view('Students.create');
    }
    
    public function show(Student $student)
    {
        return view('Students.show')->with(['student' => $student]);
    }
}
