<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index(interview $interview)
    {
        return $interview->get();
    }
}
