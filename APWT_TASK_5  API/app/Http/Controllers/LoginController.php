<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function teacherLogin(){
        return view ("pages.teacher.teacherLogin");
    }
    public function teacherLoginSubmit(Request $request){
        $validate=$request->validate([
            'email'=>'required',
            'password'=>'required',
           
        ],
        [
            'email.required'=>'Please put your email',
            'password.required'=>'Please put your password',
           
    
        ]);

        $teacher=Teacher::where("email",$request->email)
        ->where("password",$request->password)
        ->first();
        if ($teacher){
            // return "hi";
            $request->session()->put("user",$teacher->name);

            return redirect()->route("teacherDash");
        }
        return back();
    }

    public function teacherDash(){
        return view ("pages.teacher.teacherDash");
    }
     public function logout(){
        session()->forget('user');
        return redirect()->route('teacherlogin');
    }
}
