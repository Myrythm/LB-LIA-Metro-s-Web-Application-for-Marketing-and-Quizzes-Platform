<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/youth', function(){
    return view('youthL');
});

Route::get('/ConversationBusiness', function(){
    return view('cBusiness');
});

Route::get('/ConversationStudent', function(){
    return view('cStudent');
});

Route::get('/quiz', function(){
    return view('quizLanding');
});

Route::get('/teen', function(){
    return view('teenL');
});

Route::get('/adult', function(){
    return view('adultL');
});

Route::get('/quiz', function(){
    return view('quizLanding');
});

Route::get('/quiz/sentence', function(){
    return view('quizSentence');
});
Route::get('/quiz/listening', function(){
    return view('quizListening');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [QuizController::class,'index'])->middleware('auth');

// Route::get('/dashboard/question/create', function () {
//     return view('createQuestion');
// });

Route::resource('/dashboard/quiz', QuizController::class);
Route::resource('/users', UserController::class)->middleware('admin');

Route::resource('/dashboard/quiz/{quiz}/question', QuestionController::class)->middleware('admin');
Route::get('/dashboard/quiz/{quiz}/question', [QuestionController::class,'index'])->name('view.quiz.show');

Route::resource('/dashboard/quiz/{quiz}/question/{question}/option',OptionController::class)->middleware('admin');

Route::resource('/dashboard/quiz/{quiz}/start', ScoreController::class)->middleware('auth');

Route::get('/dashboard/quiz/{quiz}/result', [ScoreController::class, 'displayResult'])->middleware('auth');





