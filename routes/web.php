<?php

use App\Http\Controllers\coursemarkController;
use App\Http\Controllers\ProgressReportController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/coursemarks', [coursemarkController::class, 'index']) ->name('coursemarks.index');
Route::get('/progress', [ProgressReportController::class, 'index']) ->name('progress.index');