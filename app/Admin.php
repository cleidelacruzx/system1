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
        'User','First_name','Middle_name','Last_name','Ticket','Status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
