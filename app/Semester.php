<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{

    protected $hidden = [
        'name'
    ];
    //


    public function users()
    {
        return $this->hasMany(User::class);
    }


    public  function  courses()
    {
        return $this->hasMany(Course::class);
    }
}
