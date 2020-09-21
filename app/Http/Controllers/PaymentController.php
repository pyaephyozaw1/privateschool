<?php

namespace App\Http\Controllers;
use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use App\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{	
	public function index()
    {
        $user = User::all();
         $payments = Payment::all();
         return view('backend.payment.index',compact('payments','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
         $classes = Classes::all();
        $academics = Academic::all();
        $students = Student::all();
        $grades = Grade::all();
        $subjects=Subject::all();

        return view('backend.payment.create',compact('classes','academics','students','grades','subjects'));
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
            "student_id"=>'required',
            "total_amount" => 'required',
            "first_installation_date" => 'required',
            "first_installation_payment" => 'required',
            "class_id" => 'required',
            "grade_id"=>'required',
             "academic_id" => 'required',
             

        ]);
            

            $payment = new Payment;
            $payment->total_amount = $request->total_amount;
            $payment->first_installation_date = $request->first_installation_date;
            $payment->first_installation_payment = $request->first_installation_payment;
            $payment->second_installation_date =$request->second_installation_date;
            $payment->second_installation_payment = $request->second_installation_payment;
            $payment->third_installation_date =$request->third_installation_date;
            $payment->third_installation_payment = $request->third_installation_payment;         
            $payment->student_id=$request->student_id;
            $payment->class_id=$request->class_id;
            $payment->grade_id=$request->grade_id;
            $payment->academic_id=$request->academic_id;
            
            $payment->save();
        
           return redirect()->route('payment.index');
    }

    public function show(Payment $payment)
    {
        $student=Student::all();
         return view('backend.payment.detail',compact('payment','student'));
    }
    public function edit(Payment $payment)
    {
        $academics = Academic::all();
        $classes = Classes::all();
        $students = Student::all();
        $grades = Grade::all();
        return view('backend.payment.edit',compact('academics','classes','grades','students','payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            "total_amount" => 'required',
            "first_installation_date" => 'required',
            "first_installation_payment" => 'required',
            "second_installation_date" => 'required',
            "second_installation_payment" => 'required',
            "class_id" => 'required',
            "grade_id"=>'required',
             "academic_id" => 'required',
             

        ]);
                     
            $payment->total_amount = $request->total_amount;
            $payment->first_installation_date = $request->first_installation_date;
            $payment->first_installation_payment = $request->first_installation_payment;
            $payment->second_installation_date =$request->second_installation_date;
            $payment->second_installation_payment = $request->second_installation_payment;
            $payment->third_installation_date =$request->third_installation_date;
            $payment->third_installation_payment = $request->third_installation_payment;         
            $payment->student_id=$request->student_id;
            $payment->class_id=$request->class_id;
            $payment->grade_id=$request->grade_id;
            $payment->academic_id=$request->academic_id;
            
            $payment->save();
        
           return redirect()->route('payment.index');
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index');
    }
    public function paymentgrade(Request $request)
    {
       $id=$request->notes;
       //dd($id);
       $class=Classes::where('grade_id',$id)->get();
       //dd($class);
       return $class;
       
    }
}
