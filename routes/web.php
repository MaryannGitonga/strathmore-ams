<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PersonalController;
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

require __DIR__.'/auth.php';

//Route::get('/uploadfile','UploadFileController@index');
//Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('/uploadfile',[FileUploadController::class,'index'])->name('file.upload');
//Route::post('/uploadFile', [FileController::class, 'uploadFile'])->name('uploadFile');
//Route::post('/uploadfile','FileUploadController@showUploadFile');
Route::get('/personal', [PersonalController::class, 'index'])->name('account.profile');

