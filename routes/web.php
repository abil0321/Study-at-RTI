<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix' => 'home',
    'as' => 'home.'
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => 'working',
    'as' => 'working.'
], function () {
    Route::get('/', [WorkingController::class, 'index'])->name('index');
    Route::get('/show/{id}', [WorkingController::class, 'show'])->name('show');
    Route::get('/create', [WorkingController::class, 'create'])->name('create');
    Route::post('/store', [WorkingController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [WorkingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [WorkingController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [WorkingController::class, 'destroy'])->name('destroy');
});
