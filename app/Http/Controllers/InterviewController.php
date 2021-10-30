<?php

namespace App\Http\Controllers;

use App\Student;
use App\Interview;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;

class InterviewController extends Controller
{
    public function index(Interview $interview)
    {
        return $interview->get();
    }
    
    public function show(Interview $interview, Student $student)
    {
        return view('Interviews.show')->with(['interview' => $interview, 'student' => $interview->student]);
    }
    
    public function edit(Interview $interview)
    {
        return view('Interviews.edit')->with(['interview' => $interview]);
    }
    
     public function update(InterviewRequest $request, Student $student, Interview $interview)
    {
        $input = $request['interview'];
        $interview->fill($input)->save();
        return redirect('/students/' . $interview->id . '/interviews');
    }
    
    public function store(InterviewRequest $request, Student $student, Interview $interview)
    {
        $input = $request['interview'];
        $input["user_id"] = auth()->user()->id;
        $input["student_id"] = $student->id;
        $interview->fill($input)->save();
        return redirect('/students/' . $student->id);
    }
    
    public function create(Student $student)
    {
        return view('Interviews.create')->with(['student' => $student]);
    }
}
