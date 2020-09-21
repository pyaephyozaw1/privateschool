<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
     protected $fillable = [
    	 'name','exam_month','exam_date','start_time','end_time','subject_id','grade_id','academic_id'

    ];
}
