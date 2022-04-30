<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentRegistration(Request $request){
       
       
         return view('pages.student.studentRegistration');
        

    }
    // ---------------------------------------------------
    //  validation of student registration form
    //  ----------------------------------------------------
    public function studentRegistrationSubmit(Request $request){
        // $validate=$request->validate([
        //     'name'=>'required|min:5|max:100',
        //     'email'=>'email',
        //     'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        //     'address'=>'required'
        // ],

        // [
        //     'name.required'=>'Please put your name',
        //     'name.min'=>'Name must be greater than 5 charcters',
        //     'email'=>"Put your mail",
        //     'phone.required'=>"put your phone",
        //     'address.required'=>"put your address"

        // ]
        // );
       $student=new Student();
       $student->name =$request->name;
       $student->email=$request->email;
       $student->phone =$request->phone;
       $student->address=$request->address;
       $student->save();
    //    $msg="Registration Successful";
        // return view('pages.student.studentRegistration') ;
        // return $student;
        // return view('pages.student.list')->with('students', $students);
        //  return redirect()->route('studentRegistration');
        return $request;

    }

   public function loginForm(){
    return view("pages.student.loginForm");
   }

   public function loginFormSubmit(Request $request){
    $validate=$request->validate([
        'email'=>'required',
        'password'=>'required',
       
    ],
    [
        'email.required'=>'Please put your email',
        'password.required'=>'Please put your password',
       

    ]);


    // return "ok";
    $email=array("abc@gmail.com");
    $pass=array("123");
    $mail=$request->email;
    $password=$request->password;
    if( $mail==$email[0] &&  $password== $pass[0])
    return "login successful";
   }

   public function studentList(){
    $students = Student::all();

    // for($i=0; $i<10; $i++){
    //     $student= array(
    //         "name"=>"Student ".($i+1),
    //         "id" => "00".($i+1),
    //         "dob" => "11-11-11"
    //     );
    //     $students[]= (object)$student;
    // }
    return $students;
    // return view('pages.student.list')->with('students', $students);
    
    }

    // student edit function
    public function studentEdit(Request $request){

    $student = Student::where('id', $request->id)->first();

    // return $student;
     return view('pages.student.studentEdit')->with('student', $student);;

    }

    public function studentEditSubmitted(Request $request){

        $student = Student::where('id', $request->id)->first();

        // return $request->id;
        $student->name = $request->name;
        $student->email= $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('studentList');
    }
    
    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();
        
        return redirect()->route('studentList');
        // return redirect()->route('studentRegistration');
    }

}
