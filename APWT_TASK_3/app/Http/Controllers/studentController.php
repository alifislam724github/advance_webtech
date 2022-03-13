<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function registration()
{
    return view('pages.student.registration');
}
public function registrationSubmit(Request $request)
{
    $validate=$request->validate(
    [
        'name'=>'required',
        'id'=>'required',
        'password'=>'required',
        'email'=>'required',
        'phoneno'=>'required',

    ],
    [
        'name.required'=>'Please enter your name',
        'id.required'=>'Please enter your id',
        'password.required'=>'Please make your password',
        'phoneno.required'=>'Please enter your phone number',
        'email.required'=>'Please enter your email',
    ]
    );


}
public function login()
{
    return view('pages.student.login');
}
public function loginSubmit(Request $request)
{
    $validate=$request->validate(
    [
        
        'id'=>'required',
        'email'=>'required',
        'password'=>'required',

    ],
    [
        
        'id.required'=>'Please enter your id',
        
        'email.required'=>'Please enter your email',
        'password.required'=>'Please enter your password',
    ]
    );


}
}