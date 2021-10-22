<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        $user = Auth::user();
        $id = Auth::id();
        
        return view('Students.index')->with(['students' => $student= $user->students]);
    }
    
    public function create(Student $student)
    {
        return view('Students.create');
    }
    
    public function show(Student $student)
    {
        return view('Students.show')->with(['student' => $student, 'interviews' =>$student->interviews, 'users' =>$student->users]);
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
