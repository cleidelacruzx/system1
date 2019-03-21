<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    // 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='concern';

    protected $fillable = [
        'theDate','eproblem','bproblem','receiver','email','ticket'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
