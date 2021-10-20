<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'school',
        'grade',
        'firstchoice',
    ];
    
    public function interviews()
    {
        return $this ->hasMany('App\Interview');
    }
    
    public function users()
    {
        return $this ->belongsToMany('App\User');
    }
}