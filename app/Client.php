<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='client';

    protected $fillable = [
        'Fname','Mname','Lname','Facility','Designation','Contact','Categories','Concern'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

  
    
}


