<?php

use App\Http\Controllers\WorkingController;
use App\Http\Middleware\CheckPegawai;
use Cassandra\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(
    [
        'middleware' => ['isAuth'],
        'prefix' => 'working',
        'as' => 'working.'
    ],
    function () {
        Route::get('/', [WorkingController::class, 'index'])->name('index');
        Route::get('/{id}', [WorkingController::class, 'show'])->name('show');
        Route::post('/', [WorkingController::class, 'store'])->name('store');
        Route::put('/{id}', [WorkingController::class, 'update_put'])->name('update_put');
        Route::patch('/{id}', [WorkingController::class, 'update_patch'])->name('update_patch');
        Route::delete('/{id}', [WorkingController::class, 'destroy'])->name('delete');
    }
);


Route::get('/career', function () {
    return 'Mendaftar sebagai pegawai di perusahaan kami!';
});
Route::get('login', function () {
    return 'Halaman Login';
})->name('login');
