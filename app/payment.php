<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
    	'total_amount','first_installation_date','first_installation_payment','second_installation_date','second_installation_payment','third_installation_date','third_installation_payment','student_id','class_id','grade_id','academic_id',

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
     public function grade($value='')
    {
        return $this->belongsTo('App\Grade');
    }
}
