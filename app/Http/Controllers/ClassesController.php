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


class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
         return view('backend.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        $grades= Grade::all();
       
        return view('backend.class.create',compact('classes','grades'));
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
            "grade" => 'required'
            
        ]);
        

            $class = new Classes;
            $class->name = $request->name;
            $class->grade_id=$request->grade;
            $class->save();
        
           return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
         return view('backend.class.detail',compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $classes,$id)
    {
       
        //dd($classes);
        $classes=Classes::find($id);
       $grades = Grade::all();
        return view('backend.class.edit',compact('classes','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $classes,$id)
    {

        $request->validate([
            "name" => 'required',
             ]);
        $classes=Classes::find($id);
            $classes->name = $request->name;
            $classes->grade_id=$request->grade;
            $classes->save();

            return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $classes,$id)
    {
        $classes=Classes::find($id);
        $classes->delete();
        return redirect()->route('class.index');
    }
}
