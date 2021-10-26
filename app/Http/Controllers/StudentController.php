<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        $user = Auth::user();
        $id = Auth::id();
        
        return view('Students.index')->with(['students' => $student= $user->students]);
    }
    
    public function create(Student $student, User $user)
    {
        return view('Students.create')->with(['users' => $user->get() ]);
    }
    
    public function show(Student $student)
    {
        return view('Students.show')->with(['student' => $student, 'interviews' =>$student->interviews, 'users' =>$student->users]);
    }
    
    
    public function edit(Student $student)
    {
        return view('Students.edit')->with(['student' => $student]);
    }
    
    public function update(StudentRequest $request, Student $student)
    {
        $input = $request['student'];
        $student->fill($input)->save();
        
        return redirect('/students/' . $student->id);
    }
    
    public function store(StudentRequest $request, Student $student)
    {
        $input = $request['student'];
        $student->fill($input)->save();
        $user = User::find($request['user_id']);
        $user->students()->attach($student->id);
        return redirect('/students/' . $student->id);
    }
    
}
