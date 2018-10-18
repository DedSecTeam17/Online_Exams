<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public  function  questions()
    {
        return $this->hasMany(Question::class);
    }

    public  function  results()
    {
        return $this->hasMany(Result::class);
    }


}
