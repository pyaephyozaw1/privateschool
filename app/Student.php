<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
      protected $fillable = [
    	  'address','photo','dob','fname','father_nrc','user_id','class_id','subject_id','academic_id'

    ];
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
    public function academic($value='')
    {
    	return $this->belongsTo('App\Academic');
    }
    public function class($value='')
    {
    	return $this->belongsTo('App\Classes');
    }
    public function student($value='')
    {
        return $this->hasMany('App\Student');
    }
        public function grade($value='')
    {
        return $this->hasMany('App\Grade');
    }
     public function subject($value='')
    {
        return $this->hasMany('App\Subject');
    }
     public function result($value='')
    {
        return $this->belongsTo('App\Result');
    }
}
