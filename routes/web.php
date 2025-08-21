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

Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
});
