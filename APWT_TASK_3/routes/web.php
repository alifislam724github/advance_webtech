<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\userteacherController;
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
    return view('homepage');
});

Route::get('/homepage',[projectController::class, 'homepage'])->name('homepage');
Route::get('/service',[projectController::class, 'service'])->name('service');
Route::get('/contact',[projectController::class, 'contact'])->name('contact');
Route::post('/contactUs',[projectController::class, 'contactUs'])->name('contactUs');
Route::get('/ourTeams',[projectController::class, 'ourTeams'])->name('ourTeams');
Route::get('/aboutUs',[projectController::class, 'aboutUs'])->name('aboutUs');
Route::get('/registration',[studentController::class, 'registration'])->name('registration');
Route::post('/registration',[studentController::class, 'registrationSubmit'])->name('registrationSubmit');
Route::get('/login',[studentController::class, 'login'])->name('login');
Route::post('/login',[studentController::class, 'loginSubmit'])->name('loginSubmit');

Route::get('/userRegistration',[userteacherController::class, 'userRegistration'])->name('userRegistration');
Route::post('/userRegistration',[userteacherController::class, 'userRegistrationSubmit'])->name('userRegistrationSubmit');

Route::get('/userLogin',[userteacherController::class, 'userLogin'])->name('userLogin');
Route::post('/userLogin',[userteacherController::class, 'userLoginSubmit'])->name('userLoginSubmit');

Route::get('/userDash', [userteacherController::class, 'userDash'])->name('userDash');

Route::get('/userLogout', [userteacherController::class, 'userLogout'])->name('userLogout');

Route::get('/userUpdate', [userteacherController::class, 'userUpdate'])->name('userUpdate');

Route::post('/userUpdate', [userteacherController::class, 'userUpdateSubmit'])->name('userUpdateSubmit');