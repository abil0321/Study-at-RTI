<?php

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\Http\Controllers\UserController;
use Modules\UserManagement\Http\Controllers\UserManagementController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('usermanagements', UserManagementController::class)->names('usermanagement');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/id', [UserController::class, 'show'])->name('user.show');
    Route::get('/id/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/id', [UserController::class, 'update'])->name('user.update');
    Route::delete('/id', [UserController::class, 'destroy'])->name('user.destroy');
});
