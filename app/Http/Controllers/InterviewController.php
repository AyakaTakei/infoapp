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
    
    public function show(Interview $interview)
    {
        return view('Interviews.show')->with(['interview' => $interview]);
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
        $interview->fill($input)->save();
        return redirect('/students/' . $student->id);
    }
}
