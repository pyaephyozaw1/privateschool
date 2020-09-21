<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
     protected $fillable = [
    	  'day','starttime','endtime','class_id','subject_id','academic_id','teacher_id'

    ];
     public function academic($value='')
    {
    	return $this->belongsTo('App\Academic');
    }
    public function class($value='')
    {
    	return $this->belongsTo('App\Classes');
    }
     public function teacher($value='')
    {
    	return $this->hasMany('App\Teacher');
    }
     public function subject($value='')
    {
        return $this->belongsTo('App\Subject');
    }
     public function day($value='')
    {
        return $this->belongsTo('App\Day');
    }
     public function time($value='')
    {
        return $this->belongsTo('App\Time');
    }
    
}
