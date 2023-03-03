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

// Backend Routes
Route::namespace('App\Http\Controllers\backend')->group(function () {
    Route::get('/', BackendHome::class)->name('index');
    Route::resource('part', PartController::class);
    Route::get('/delete_part/{part}', [App\Http\Controllers\backend\PartController::class, 'destroy'])->name('delete_part');
});
