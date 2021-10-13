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
    
    public function edit(Student $student)
    {
        return view('Students.edit')->with(['student' => $student]);
    }
    
    public function update(Request $request, Student $student)
    {
        $input = $request['student'];
        $student->fill($input)->save();
        
        return redirect('/students/' . $student->id);
    }
    
    public function store(Request $request, Student $student)
    {
        $input = $request['student'];
        $student->fill($input)->save();
        return redirect('/students/' . $student->id);
    }
}
