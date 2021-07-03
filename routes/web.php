<?php

use App\Http\Controllers\StudentController;
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
    return view('auth.login');
});

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
Route::get('/feesstructure',[StudentController::class,'fees_structure'])->middleware(['auth'])->name('feesstructure.index');
Route::get('/coursework-marks', [StudentController::class, 'course_work']) ->name('coursework_marks');
Route::get('/download-marks', [StudentController::class, 'download_coursework']) ->name('download_marks');
Route::get('/attendance/{year}', [StudentController::class, 'attendance']) ->name('attendance');
Route::get('/attendance-details/{unit:id}', [StudentController::class, 'attendance_details']) ->name('attendance_details');
Route::get('/fees-structure/{year}', [StudentController::class, 'fees_statements']) ->name('fees_statements');

require __DIR__.'/auth.php';
