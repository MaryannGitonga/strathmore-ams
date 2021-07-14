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

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\StudentController::class, 'profile'])->name('dashboard');
    Route::get('/exam-card', [App\Http\Controllers\StudentController::class, 'exam_card'])->name('exam-card');
    Route::get('/registration', [App\Http\Controllers\StudentController::class, 'register_units'])->name('registration');
    Route::get('/available', [App\Http\Controllers\StudentController::class, 'available_units'])->name('available');
    Route::get('/retake', [App\Http\Controllers\StudentController::class, 'retakes'])->name('retake');
    Route::get('/register/{unit:id}', [App\Http\Controllers\StudentController::class, 'register_unit'])->name('register_unit');
    Route::get('/upload-files',[StudentController::class,'documents'])->name('file.upload');
    Route::get('/personal-details', [StudentController::class, 'personal_details'])->name('account.profile');
    Route::put('/save-details/{student:id}', [StudentController::class, 'save_details'])->name('save_details');
    Route::post('/save-files/{student:id}', [StudentController::class, 'save_files'])->name('save_files');
    Route::get('/feesstructure',[StudentController::class,'fees_structure'])->name('feesstructure.index');
    Route::get('/coursework-marks', [StudentController::class, 'course_work']) ->name('coursework_marks');
    Route::get('/progress-report/completed-units', [StudentController::class, 'progress_report']) ->name('progress_report');
    Route::get('/progress-report/pending-units', [StudentController::class, 'pending_units']) ->name('pending_units');

    Route::get('/download-marks', [StudentController::class, 'download_coursework']) ->name('download_marks');
    Route::get('/attendance/{year}', [StudentController::class, 'attendance']) ->name('attendance');
    Route::get('/attendance-details/{unit:id}', [StudentController::class, 'attendance_details']) ->name('attendance_details');
    Route::get('/fees-statements/{year}', [StudentController::class, 'fees_statements']) ->name('fees_statements');
    Route::get('fees-statement/download', [StudentController::class, 'download_statements']) ->name('download_statements');
    Route::get('progress-report/download', [StudentController::class, 'download_reports']) ->name('download_reports');

});
