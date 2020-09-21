<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
   protected $fillable = [
    	  'name','exam_month','exam_date','start_time','end_time','subject_id','grade_id','academic_year_id'

    ];
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function class()
    {
        return $this->belongsTo('App\Classes','class_id');
    }
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }
        public function academic()
    {
        return $this->belongsTo('App\Academic');
    }
}
