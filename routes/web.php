<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\WorkingController;
use App\Http\Middleware\CheckPegawai;
use Cassandra\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test_component');
});

Route::group([
    'prefix' => 'home',
    'as' => 'home.'
], function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::group([
    'prefix' => 'perusahaan',
    'as' => 'perusahaan.'
], function () {
    Route::get('/', [PerusahaanController::class, 'index'])->name('index');
    Route::get('/create', [PerusahaanController::class, 'create'])->name('create');
    Route::get('show/{id}', [PerusahaanController::class, 'show'])->name('show');
    Route::post('/store', [PerusahaanController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PerusahaanController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PerusahaanController::class, 'update'])->name('update');
    Route::delete('/{id}', [PerusahaanController::class, 'destroy'])->name('destroy');
});
