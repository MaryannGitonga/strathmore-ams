<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/dashboard', [App\Http\Controllers\StudentController::class, 'profile'])->middleware(['auth'])->name('dashboard');
Route::get('/exam-card', [App\Http\Controllers\StudentController::class, 'exam_card'])->middleware(['auth'])->name('exam-card');
Route::get('/registration', [App\Http\Controllers\StudentController::class, 'register_units'])->middleware(['auth'])->name('registration');
Route::get('/available', [App\Http\Controllers\StudentController::class, 'available_units'])->middleware(['auth'])->name('available');
Route::get('/retake', [App\Http\Controllers\StudentController::class, 'retakes'])->middleware(['auth'])->name('retake');

require __DIR__.'/auth.php';
