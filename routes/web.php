<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\coursemarkController;
use App\Http\Controllers\ProgressReportController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\CompulsoryController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ExcemptionsController;
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

require __DIR__.'/auth.php';

Route::get('/coursemarks', [coursemarkController::class, 'index']) ->name('coursemarks.index');
Route::get('/progress', [ProgressReportController::class, 'index']) ->name('progress.index');
Route::get('/Pending', [PendingController::class, 'index']) ->name('Pending.index');
Route::get('/Compulsory', [CompulsoryController::class, 'index']) ->name('Compulsory.index');
Route::get('/Specialization', [SpecializationController::class, 'index']) ->name('Specialization.index');
Route::get('/Exemptions', [ExcemptionsController::class, 'index']) ->name('Exemptions.index');
