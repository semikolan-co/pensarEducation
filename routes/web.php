<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
// General Routes
Route::view('/','home')->name('home');
Route::view('/courses','pages.courses')->name('courses');
Route::view('/bookclass','pages.bookclass')->name('bookclass');
Route::view('/contact','pages.contact')->name('contact');
Route::view('/success','pages.success')->name('success');


//Post Home Routes
Route::post('/adddemostudent',[HomeController::class,'adddemostudent'])->name('adddemostudent');



//User Routes
Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');

Route::get('/learn/{course?}',[UserController::class,'learn'] )->name('learn');
Route::get('/quiz/{id}/{spice}',[UserController::class,'quiz'] )->name('quiz');

Route::post('/updateprogress',[UserController::class,'updateprogress'])->name('updateprogress');


//Admin routes
Route::get('/admindash',[AdminController::class,'index'])->name('admin');
Route::get('/demostudents',[AdminController::class,'demostudents'])->name('demostudents');
Route::get('/students',[AdminController::class,'students'])->name('students');
Route::get('/topics',[AdminController::class,'topics'])->name('topics');
Route::get('/lessons',[AdminController::class,'lessons'])->name('lessons');
Route::get('/quizzes',[AdminController::class,'quizzes'])->name('quizzes');
Route::get('/addquiz',[AdminController::class,'getaddquiz'])->name('getaddquiz');
Route::get('/editquiz/{id}',[AdminController::class,'geteditquiz'])->name('geteditquiz');



//-------------------------------------------------------------------------------------------
//----------------------------Post Routes- Admin --------------------------------------------
//-------------------------------------------------------------------------------------------

//Topic Routes
Route::post('/addtopic',[AdminController::class,'addtopic'])->name('addtopic');
Route::post('/edittopic',[AdminController::class,'edittopic'])->name('edittopic');
Route::post('/deletetopic',[AdminController::class,'deletetopic'])->name('deletetopic');

//Lesson Routes
Route::post('/addlesson',[AdminController::class,'addlesson'])->name('addlesson');
Route::post('/editlesson',[AdminController::class,'editlesson'])->name('editlesson');
Route::post('/deletelesson',[AdminController::class,'deletelesson'])->name('deletelesson');

//Quiz Routes
Route::post('/addquiz',[AdminController::class,'addquiz'])->name('addquiz');
Route::post('/editquiz',[AdminController::class,'editquiz'])->name('editquiz');
Route::post('/deletequiz',[AdminController::class,'deletequiz'])->name('deletequiz');