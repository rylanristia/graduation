<?php

use App\Http\Controllers\DiscographyController;
use App\Http\Controllers\GraduationController;
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

Route::get('/', [GraduationController::class, 'firstsplash'])->name('first');
Route::get('/second', [GraduationController::class, 'secondsplash'])->name('second');
Route::get('/third', [GraduationController::class, 'thirdsplash'])->name('third');
Route::get('/fourth', [GraduationController::class, 'fourthsplash'])->name('fourth');
Route::get('/last-phase', [GraduationController::class, 'lastsplash'])->name('last');

Route::get('/discography', [DiscographyController::class, 'index'])->name('discography');