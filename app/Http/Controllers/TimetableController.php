<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use App\Timetable;
use App\Teacher;
use App\Day;
use App\Time;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
         $timetables = Timetable::all();
         return view('backend.timetable.index',compact('timetables','academics','classes','grades'));
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
         $timetables = Timetable::all();
         $teachers = Teacher::all();
         $days= Day::all();
         $times = Time::all();
        return view('backend.timetable.create',compact('timetables','academics','classes','grades','subjects','teachers','days','times'));
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
            
            "day" => 'required',
            "time" => 'required',
            "grade" => 'required',
            "class" => 'required',
            "subject" => 'required',
            "academic" => 'required',
            "name" => 'required'
           

        ]);
        
            

            $timetable = new Timetable;
            $timetable->day_id = $request->day;
            $timetable->time_id = $request->time;
            $timetable->class_id= $request->class;
            $timetable->subject_id= $request->subject;
            $timetable->academic_id= $request->academic;
            $timetable->teacher_id= $request->name;
            $timetable->save();
        
           return redirect()->route('timetable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $days=Day::all();
        $times=Time::all();
        $timetables=Timetable::where('class_id',$id)->get();
         return view('backend.timetable.detail',compact('timetables','days','times'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
         $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();

        return view('backend.timetable.edit',compact('academics','classes','grades','subjects','timetable','teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
       $request->validate([
            
            "day" => 'required',
            "starttime" => 'required',
            "endtime" => 'required',
           

        ]);
        
            

            $timetable->day = $request->day;
            $timetable->starttime = $request->starttime;
            $timetable->endtime = $request->endtime;
            $timetable->save();
        
           return redirect()->route('timetable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
       $timetable->delete();
        return redirect()->route('timetable.index');
    }
     public function teachersubject(Request $request)
    {
       $id=$request->subject;
       //dd($id);
       $teacher=Teacher::where('subject_id',$id)->get();
       //dd($class);

       foreach($teacher as $user)
       {
        $name = $user->User->name;
        //dd($name);
          }
       return $teacher;

       
    }
    public function timetableclass(Request $request)
    {
          $class1 = $request->time_class;
        $academic1=$request->time_academic;

        $timetables=DB::table('timetables')->where([
            ['class_id','=',$class1],
            ['academic_id','=',$academic1],
        ])->get();
        
 // dd($students);
         return $timetables;
    }
}
