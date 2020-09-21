<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\Subject;
use App\Student;
use App\Academic;
use App\Grade;
use App\Classes;
use hash;
use Auth;
class TeacherPageController extends Controller
{
     public function teacherhomefun($value=''){
     	 $teachers=Teacher::all();

    	return view('backend.Teacher_role.teachermain',compact('teachers'));
}


     public function teacherdetailfun(){
     	$id=Auth::user()->id;
     	$user=User::find($id);
    	return view('backend.Teacher_role.teacherdetail',compact('user'));
}


    public function teacherphotofun(Request $request,$id){

           if ($request->hasFile('photo')){
               $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/teacherimg'),$imageName);
            $path = 'backend/teacherimg/'.$imageName;


         }else{
                $path = $request->oldphoto;
         }
         $teacher= Teacher::where('id',$id)->first();

        // dd($teacher);
         $teacher->photo = $path;
         $teacher->save();
        return back();
}
 
    public function teacherfirsticonfun(Request $request,$id){

        $teacher= Teacher::where('id',$id)->first();
        $teacher->user->password = bcrypt($request->password);
        $teacher->user->name = $request->name;
        $teacher->user->email = $request->email;
        $teacher->user->save();
           
            $teacher->address = $request->address;
            $teacher->save();

            return back();
}

    public function teachersecondiconfun(Request $request,$id){
        
        $teacher= Teacher::where('id',$id)->first();
           
            $teacher->nrc = $request->nrc;
            $teacher->phoneno = $request->phoneno;
            $teacher->save();

            return back();
}
   
   public function studenthomefun($value=''){
     	
     	$students=Student::all();
    	return view('backend.Teacher_role.studentmain',compact('students'));
}


    public function studentdetailfun($id){
     	
     	$student=Student::find($id);
    	return view('backend.Teacher_role.studentdetail',compact('student'));
}


}
