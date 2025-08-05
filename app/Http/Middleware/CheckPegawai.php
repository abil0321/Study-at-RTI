<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckPegawai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // * melakukan pengecekan terhadap request pegawai (yang dilakukan di thunder client)
        if (!$request->pegawai == 'true') {
            return redirect('/career');
        }
        // * akan melanjutkan ke request selanjutnya di route/controller (karena telah di cek di middleware)
        // return $next($request);

        // * Sebelum data dikirmkan log ini akan berjalan
        Log::info("Before Request: ", [
            'url' => $request->url(),
            'params' => $request->all()
        ]);
        // * akan melanjutkan ke request selanjutnya yang dimasukan ke variable $response
        $response = $next($request);

        sleep(2);

        // * Setelah data dikirimkan log ini akan berjalan berdasarkan $response
        Log::info("After Request: ", [
            'status' => $response->getStatusCode(),
            'content' => $response->getContent()
        ]);

        return $response;
    }
}
