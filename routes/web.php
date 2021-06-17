<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/uploadfile','UploadFileController@index');
//Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('/uploadfile',[FileUploadController::class,'index'])->name('file.upload');
//Route::post('/uploadFile', [FileController::class, 'uploadFile'])->name('uploadFile');
//Route::post('/uploadfile','FileUploadController@showUploadFile');
Route::get('/personal', [PersonalController::class, 'index'])->name('account.profile');

