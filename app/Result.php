<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
    	  'student_id','academic_id','grade_id','class_id','exam_id','subject_id','mark'

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
        return $this->belongsTo('App\Student');
    }
     public function exam($value='')
    {
        return $this->belongsTo('App\Exam');
    }
    public function subject($value='')
    {
        return $this->belongsTo('App\Subject');
    }
}
