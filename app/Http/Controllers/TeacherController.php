<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\User;
use App\Teacher;
use App\Subject;
use App\Role;

class TeacherController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $teachers=Teacher::all();
        return view('backend.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
       return view('backend.teacher.create',compact('subjects'));
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
            'name' => 'required',
            'photo' => 'required',
        ]);
                $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/teacherimg'),$imageName);

        $path = 'backend/teacherimg/'.$imageName;
        $user=new User;
        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make("123456789");
        $user->save();
        $id=$user->id;
        $teacher=new Teacher;
        $teacher->address=request('address');
        $teacher->nrc=request('nrc');
        $teacher->photo=$path;
        $teacher->phoneno=request('phoneno');
        $teacher->salary=request('salary');
        $teacher->user_id=$id;
        $teacher->subject_id=$request->subject;
        $teacher->save();
        $user->assignRole('Teacher');
        return redirect()->route('teacher.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $subject = Subject::all();
        return view('backend.teacher.detail',compact('teacher','subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view ('backend.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        
         $request->validate([
            "name" => 'required',
            "email" => 'required',
             "photo" => 'sometimes',
            "oldphoto" => 'required',
            "address" => 'required',
            "nrc" => 'required',
            "phoneno" => 'required',
            "salary" => 'required'

           
        ]);
        //file upload, if data
         if ($request->hasFile('photo')){
               $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/teacherimg'),$imageName);
            $path = 'backend/teacherimg/'.$imageName;

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

       
            $teacher->photo = $path;
            $teacher->address = $request->address;
            $teacher->nrc = $request->nrc;
            $teacher->phoneno = $request->phoneno;
            $teacher->salary =$request->salary;
            $teacher->user_id=$id;
            $teacher->save();

            return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
    public function delete_teacher($value='')
    {
        $teacher=Teacher::find($id);
        $teacher->status=1;
        return redirect()->route('teacher.index');
    }
}
