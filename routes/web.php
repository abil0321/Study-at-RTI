<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkingController;
use App\Http\Middleware\CheckPegawai;
use Cassandra\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'working',
    'as' => 'working.',
], function () {
    Route::get('/', [WorkingController::class, 'index'])->name('index');
    Route::get('/{id}', [WorkingController::class, 'show'])->name('show');
    Route::post('/', [WorkingController::class, 'store'])->name('store');
    Route::put('/', [WorkingController::class, 'edit'])->name('edit');
    Route::delete('/', [WorkingController::class, 'destroy'])->name('destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
