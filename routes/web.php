<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizController;
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

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [QuizController::class,'index'])->middleware('auth');

// Route::get('/dashboard/question/create', function () {
//     return view('createQuestion');
// });

Route::resource('/dashboard/quiz', QuizController::class);
Route::resource('/users', UserController::class)->middleware('admin');
