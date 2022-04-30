<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/products', [PagesController::class, 'products'])->name('products');

Route::get('/teams', [PagesController::class, 'teams'])->name('teams');

Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs', [PagesController::class, 'contactUsSubmit'])->name('contactUs');

// student route started
// Route::get('/studentRegistration', [StudentController::class, 'studentRegistration'])->name('studentRegistration');
// Route::post('/studentRegistration', [StudentController::class, 'studentRegistrationSubmit'])->name('studentRegistration');

Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentEdit']);
Route::post('/studentEdit',[StudentController::class,'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete']);

// Route::get('/login', [StudentController::class, 'login'])->name('login');
// Route::post('/login', [StudentController::class, 'loginSubmit'])->name('login');

Route::get('/loginForm', [StudentController::class, 'loginForm'])->name('loginForm');
Route::post('/loginForm', [StudentController::class, 'loginFormSubmit'])->name('loginForm');


// teacher route started
Route::get('/teacherCreate', [TeacherController::class, 'teacherCreate'])->name('teacherCreate');  //registration of teacher
Route::post('/teacherCreate', [TeacherController::class, 'teacherCreateSubmit'])->name('teacherCreate');  //form validation of teacher
Route::get('/teacherList', [TeacherController::class, 'teacherList'])->name('teacherList')->middleware("ValidTeacher");;  //form validation of teacher
// /Teacher Course
// Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
Route::get('/teacherCourses/{id}',[TeacherController::class,'teacherCourses'])->name('teacherCourses')->middleware("ValidTeacher");;
// teacher login
Route::get('/teacherLogin', [LoginController::class, 'teacherLogin'])->name('teacherLogin');
Route::post('/teacherLogin', [LoginController::class, 'teacherLoginSubmit'])->name('teacherLogin');
Route::get('/teacherLogout', [LoginController::class, 'teacherLogout'])->name('teacherLogout');

// teacher dashboard
Route::get('/teacherDash', [LoginController::class, 'teacherDash'])->name('teacherDash')->middleware("ValidTeacher");


