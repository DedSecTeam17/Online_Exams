<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    public  function  user()
    {
        return $this->belongsTo(User::class);
    }


    public  function  course()
    {
        return  $this->belongsTo(Course::class);
    }



    //
}
