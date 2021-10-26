<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'content',
    ];
    
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
