<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
