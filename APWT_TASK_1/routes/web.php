<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

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
Route::get('/ourTeams',[projectController::class, 'ourTeams'])->name('ourTeams');
Route::get('/aboutUs',[projectController::class, 'aboutUs'])->name('aboutUs');
