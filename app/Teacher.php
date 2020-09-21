<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = [
    	  'address','phoneno','nrc','photo','salary','user_id','subject_id'

    ];
   public function User($value='')
  {
  	return $this->belongsTo('App\User');
  }
  public function Timetable($value='')
  {
  	return $this->belongsTo('App\Timetable');
  }
  public function subject($value='')
  {
    return $this->belongsTo('App\Subject');
  }
}
