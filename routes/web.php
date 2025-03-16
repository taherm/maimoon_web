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
    Route::get('/category_parts/{category}', [App\Http\Controllers\backend\PartController::class, 'category_parts'])->name('category_parts');

    // Bush & WB Routes.
    Route::resource('bush', BushController::class);
    Route::get('/category_bush/{category}', [App\Http\Controllers\backend\BushController::class, 'category_bush'])->name('category_bush');
    Route::get('/delete_bush/{bush}', [App\Http\Controllers\backend\BushController::class, 'destroy'])->name('delete_bush');

    Route::resource('payment', PaymentController::class);
    Route::get('/delete_payment/{payment}', [App\Http\Controllers\backend\PaymentController::class, 'destroy'])->name('delete_payment');
});
