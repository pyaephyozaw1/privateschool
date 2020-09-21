<?php

namespace App\Http\Controllers;
use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use App\Result;
use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResultController extends Controller
{	
	public function index()
    {

         $results = Result::all();
         return view('backend.result.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $academics=Academic::all();
        $students = Student::all();
        $exams = Exam::all();
        $subjects=Subject::all();
        $grades=Grade::all();
        $classes=Classes::all();

        return view('backend.result.create',compact('academics','students','exams','subjects','grades','classes'));
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
            "marks"=>'required',
            
        ]);
            $result = new Result;
            $result->mark = $request->marks;
            $result->student_id = $request->student_id;
            $result->academic_id=$request->academic_id;
            $result->grade_id=$request->grade_id;
            $result->class_id=$request->class_id;

            $result->exam_id = $request->exam_id;
            $result->subject_id = $request->subject_id;
            
            $result->save();
        
           return redirect()->route('result.index');
    }

    public function show(Result $result)
    {
        return view('backend.result.detail',compact('result'));
    }
    public function edit(Result $result)
    {
        $students=Student::all();
        $grades=Grade::all();
        $academics = Academic::all();
        $classes = Classes::all();
        $subjects = Subject::all();
        $exams = Exam::all();
        return view('backend.result.edit',compact('result','academics','classes','grades','students','exams','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
         $request->validate([
            "marks"=>'required',
          
        ]);
           $result->mark = $request->marks;
            $result->student_id = $request->student_id;
            $result->academic_id=$request->academic_id;
            $result->grade_id=$request->grade_id;
            $result->class_id=$request->class_id;
            $result->exam_id = $request->exam_id;
            $result->subject_id = $request->subject_id;

            
            $result->save();
        
           return redirect()->route('result.index'); 
            
    }
    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('result.index');
    }
}
