<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\Time;
use App\Timetable;
use App\User;
use App\Student;
use Auth;

class StudentpageController extends Controller
{
	// public function studentpasswordfun($value=''){
     public function studentpasswordfun(Request $request){
    	// $student= Student::where('id',$id)->first();
    	$id=Auth::user()->id;
     	$user=User::find($id);
        $student=Student::where('user_id',$id)->first();

     	// $student= Student::where('id',$id)->first();
     	
     	// dd($user);
        // $user->password = bcrypt($request->password);
        // $user->save();

         // return back();


    		  return view('backend.Student_role.studentpassword',compact('user','student'));
    	}
    	public function studentpasschange(Request $request)
    	{
    		$id=Auth::user()->id;
    		$user=User::find($id);
    		$user->password = bcrypt($request->password);
        	$user->save();
        	return back();
    	}
        public function studentroletimetablefun($class_id,$academic_id,$student_id)
        {

            //dd($academic_id);
            // $id=Auth::user()->id;
            // $user=User::find($id);
            // $user->password = bcrypt($request->password);
            // $user->save();
            // return back();
        $days=Day::all();
        $times=Time::all();
        $student=Student::find($student_id);
        $timetables=Timetable::where('class_id',$class_id)
                              ->where('academic_id',$academic_id)->get();
        
            return view('backend.Student_role.studentroletimetable',compact('days','times','timetables','student'));
        }
}
