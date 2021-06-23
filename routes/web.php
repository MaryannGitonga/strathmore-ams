<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\feesstructureController;
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
Route::get('/register/{unit:id}', [App\Http\Controllers\StudentController::class, 'register_unit'])->middleware(['auth'])->name('register_unit');
Route::get('/upload-files',[StudentController::class,'documents'])->middleware(['auth'])->name('file.upload');
Route::get('/personal-details', [StudentController::class, 'personal_details'])->middleware(['auth'])->name('account.profile');
Route::put('/save-details/{student:id}', [StudentController::class, 'save_details'])->middleware(['auth'])->name('save_details');
Route::post('/save-files/{student:id}', [StudentController::class, 'save_files'])->middleware(['auth'])->name('save_files');
Route::get('/feesstructure',[feesstructureController::class,'index'])->middleware(['auth'])->name('feesstructure.index');
require __DIR__.'/auth.php';



