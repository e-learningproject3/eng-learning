<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TopicController;
use App\Models\Lesson;
use App\Models\Teacher;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;



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
Route::get('/test', function () {
    return view('test');
});

Route::get('/', [HomeController::class, 'index']);

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

//login
Route::get('/home', [HomeController::class, 'redirect']) -> name('home');


Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/contact', [HomeController::class, 'contact']);
//search
Route::get('/search', [HomeController::class, 'search']);



Route::get('/add_teacher_view', [AdminController::class, 'addview']);
Route::post('/upload_teacher', [AdminController::class, 'upload']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);

//teacher
Route::get('/showteacher', [AdminController::class, 'showteacher']);
Route::get('/deleteteacher/{id}', [AdminController::class, 'deleteteacher']);
Route::get('/updateteacher/{id}', [AdminController::class, 'updateteacher']);
Route::post('/editteacher/{id}', [AdminController::class, 'editteacher']);

//topic
Route::get('/topic', [AdminController::class, 'topic']);
Route::get('/deletetopic/{id}', [AdminController::class, 'deletetopic']);
Route::get('/add_topic_view', [AdminController::class, 'addview_topic']);
Route::POST('/upload_topic', [AdminController::class, 'upload_topic']);
Route::get('/updatetopic/{id}', [AdminController::class, 'updatetopic']);
Route::post('/edittopic/{id}', [AdminController::class, 'edittopic']);


//user
Route::get('/user', [AdminController::class, 'user']);


//fullcalender
Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);


Route::get('/teachers', [TeacherController::class, 'showteacher']);
Route::get('/about', [AboutController::class, 'showteacher']);
Route::get('/lessons',[TeacherController::class, 'lessons']);


//Lesson
//name route -> function
Route::get('/lesson', [LessonController::class, 'lesson']);
Route::get('/create', [LessonController::class, 'create']);
Route::post('/store', [LessonController::class, 'store']);
Route::get('/lesson_details/{id}', [LessonController::class, 'lesson_details']);
Route::get('/deletelesson/{id}', [LessonController::class, 'deletelesson']);
Route::post('/editlesson/{id}', [LessonController::class, 'editlesson']);
Route::get('/updatelesson/{id}', [LessonController::class, 'updatelesson']);

//user -> post
Route::get('/post', [LessonController::class, 'news']);

Route::get('/details/{id}', [LessonController::class, 'details_post']);

Route::get('/skills', [LessonController::class, 'skills']);
Route::get('/grammar', [LessonController::class, 'grammar']);
Route::get('/vocubulary', [LessonController::class, 'vocubulary']);
Route::get('/business', [LessonController::class, 'business']);

//post user listening
Route::get('/listening', [LessonController::class, 'listening']);

Route::get('/elementary', [LessonController::class, 'elementary']);
Route::get('/pre_elementary', [LessonController::class, 'pre_elementary']);
Route::get('/intermediate', [LessonController::class, 'intermediate']);
Route::get('/upper_intermediate', [LessonController::class, 'upper_intermediate']);
Route::get('/advanced', [LessonController::class, 'advanced']);
//reading
Route::get('/reading', [LessonController::class, 'reading']);

Route::get('/elementary_reading', [LessonController::class, 'elementary_reading']);
Route::get('/pre_elementary_reading', [LessonController::class, 'pre_elementary_reading']);
Route::get('/intermediate_reading', [LessonController::class, 'intermediate_reading']);
Route::get('/upper_intermediate_reading', [LessonController::class, 'upper_intermediate_reading']);
Route::get('/advanced_reading', [LessonController::class, 'advanced_reading']);
//speaking
Route::get('/speaking', [LessonController::class, 'speaking']);

Route::get('/elementary_speaking', [LessonController::class, 'elementary_speaking']);
Route::get('/pre_elementary_speaking', [LessonController::class, 'pre_elementary_speaking']);
Route::get('/intermediate_speaking', [LessonController::class, 'intermediate_speaking']);
Route::get('/upper_intermediate_speaking', [LessonController::class, 'upper_intermediate_speaking']);
Route::get('/advanced_speaking', [LessonController::class, 'advanced_speaking']);
//writing
Route::get('/writing', [LessonController::class, 'writing']);

Route::get('/elementary_writing', [LessonController::class, 'elementary_writing']);
Route::get('/pre_elementary_writing', [LessonController::class, 'pre_elementary_writing']);
Route::get('/intermediate_writing', [LessonController::class, 'intermediate_writing']);
Route::get('/upper_intermediate_writing', [LessonController::class, 'upper_intermediate_writing']);
Route::get('/advanced_writing', [LessonController::class, 'advanced_writing']);


// post user vocubulary
Route::get('/elementary_vocub', [LessonController::class, 'elementary_vocub']);
Route::get('/pre_elementary_vocub', [LessonController::class, 'pre_elementary_vocub']);
Route::get('/intermediate_vocub', [LessonController::class, 'intermediate_vocub']);
Route::get('/upper_intermediate_vocub', [LessonController::class, 'upper_intermediate_vocub']);
Route::get('/advanced_vocub', [LessonController::class, 'advanced_vocub']);


//grammar
Route::get('/elementary_grammar', [LessonController::class, 'elementary_grammar']);
Route::get('/pre_elementary_grammar', [LessonController::class, 'pre_elementary_grammar']);
Route::get('/intermediate_grammar', [LessonController::class, 'intermediate_grammar']);
Route::get('/upper_intermediate_grammar', [LessonController::class, 'upper_intermediate_grammar']);
Route::get('/advanced_grammar', [LessonController::class, 'advanced_grammar']);



//topic
Route::get('/topic', [TopicController::class, 'topic_view']);
Route::get('/create_topic', [TopicController::class, 'create_topic']);
Route::post('/store_topic', [TopicController::class, 'store_topic']);





//comment
Route::post('/comment', [CommentController::class, 'comment']);
// Route::post('/reply', [CommentController::class, 'reply']);












