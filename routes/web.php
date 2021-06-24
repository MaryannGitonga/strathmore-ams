<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/coursemarks', [coursemarkController::class, 'index']) ->name('coursemarks.index');
Route::get('/progress', [ProgressReportController::class, 'index']) ->name('progress.index');
Route::get('/Pending', [PendingController::class, 'index']) ->name('Pending.index');
Route::get('/Compulsory', [CompulsoryController::class, 'index']) ->name('Compulsory.index');
Route::get('/Specialization', [SpecializationController::class, 'index']) ->name('Specialization.index');
Route::get('/Exemptions', [ExcemptionsController::class, 'index']) ->name('Exemptions.index');