<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';

    protected $fillable = [
        'last_name', 'first_name', 'middle_name', 'course', 'section'
    ];
}
