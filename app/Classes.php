<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
    	 'name','grade_id'

    ];
    public function grade($value='')
    {
    	return $this->belongsTo('App\Grade');
    }
    public function students($value='')
    {
    	return $this->hasMany('App\Student');
    }
    public function timetable()
    {
        return $this->hasOne('App\Timetable','class_id');
    }
}
