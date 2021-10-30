<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'content',
        'interview_date',
        'user_id',
        'student_id',
    ];
    
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
