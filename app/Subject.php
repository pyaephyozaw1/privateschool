<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     protected $fillable = [
    	  'name'

    ];
     public function timetable($value='')
    {
    	return $this->hasMany('App\Timetable');
    }
     public function teacher($value='')
    {
    	return $this->belongsTo('App\Teacher');
    }
}
