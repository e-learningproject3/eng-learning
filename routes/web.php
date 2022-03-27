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


//quiz
Route::get('/quiz', [QuizController::class, 'quiz']);
Route::get('/create_quiz', [QuizController::class, 'create']);
Route::post('/store_quiz', [QuizController::class, 'store']);
// Route::get('/lesson_details/{id}', [QuizController::class, 'lesson_details']);
Route::get('/delete_quiz/{id}', [QuizController::class, 'delete']);
Route::post('/edit_quiz/{id}', [QuizController::class, 'edit']);
Route::get('/update_quiz/{id}', [QuizController::class, 'update']);

//comment
Route::post('/comment', [CommentController::class, 'comment']);
// Route::post('/reply', [CommentController::class, 'reply']);












