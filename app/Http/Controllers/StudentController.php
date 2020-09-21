<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
         return view('backend.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('backend.student.create',compact('academics','classes','grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            
            "name" => 'required',
            "email" => 'required',
            "photo" => 'required',
            "address" => 'required',
            "dob" => 'required',
            "fname" => 'required',
            "father_nrc" => 'required'
            // "grade" => 'required',
            // "class" => 'required'

        ]);
        //If include file,upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/stuimg'),$imageName);
            $path = 'backend/stuimg/'.$imageName;
        //data insert
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make('123456789');     
            $user->save();
            $id=$user->id;

            $student = new Student;
            $student->photo = $path;
            $student->address = $request->address;
            $student->dob = $request->dob;
            $student->fname = $request->fname;
            $student->father_nrc =$request->father_nrc;
            $student->user_id=$id;
            $student->academic_id = $request->academic;
            $student->class_id=$request->class;
            $student->subject_id=$request->subject;
            $student->save();
            $user->assignRole('Student');
        
           return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('backend.student.detail',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('backend.student.edit',compact('academics','classes','grades','subjects','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
         $request->validate([
            "name" => 'required',
            "email" => 'required',
             "photo" => 'sometimes',
            "oldphoto" => 'required',
            "address" => 'required',
            "dob" => 'required',
            "fname" => 'required',
            "father_nrc" => 'required'

           
        ]);
        //file upload, if data
         if ($request->hasFile('photo')){
               $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/stuimg'),$imageName);
            $path = 'backend/stuimg/'.$imageName;

         }else{
                $path = $request->oldphoto;
         }
            $user_id=$request->user_id;
            $user=User::find($user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make('123456789');     
            $user->save();
            $id=$user->id;

       
            $student->photo = $path;
            $student->address = $request->address;
            $student->dob = $request->dob;
            $student->fname = $request->fname;
            $student->father_nrc =$request->father_nrc;
            $student->user_id=$id;
            $student->academic_id = $request->academic;
            $student->class_id=$request->class;
            $student->subject_id=1;
            $student->save();

            return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
    public function studentgrade(Request $request)
    {
       $id=$request->notes;
       //dd($id);
       $class=Classes::where('grade_id',$id)->get();
       //dd($class);
       return $class;
       
    }
    public function grade_subject($value='')
    {
        $subjects=Subject::all();
        return $subjects;
    }
}
