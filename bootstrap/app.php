<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'isPegawai' =>  \App\Http\Middleware\CheckPegawai::class,
            'isAuth' => \App\Http\Middleware\isAuth::class
        ]);
        // * Setting agar method post bisa berjalan di Route
        $middleware->validateCsrfTokens(except: [
            // '/movie' // validateCsrfTokens tidak akan aktif kecuali untuk route /movie
            '*' // menggunakan '*' agar tidak aktif ke semua route
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
