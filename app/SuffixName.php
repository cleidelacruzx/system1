<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuffixName extends Model
{
    //
    protected $table = 'suffixes';

    public function user(){
    	$this->belongsTo('App\User');
    }
    
}
