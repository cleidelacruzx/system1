<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table='admin';

    protected $fillable = [
        'theDate','eproblem','bproblem','receiver','email','ticket'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
