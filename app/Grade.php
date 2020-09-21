<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
     protected $fillable = [
    	  'name'

    ];
     public function class($value='')
    {
    	return $this->hasMany('App\Classes');
    }
}
