<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PegawaiChecking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->pegawai == true) {
            # code...
            return redirect('/working');
        }

        Log::info('Before Request: ', [
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $response = $next($request);

        Log::info('After Request: ', [
            'status' => $response->getStatusCode(),
            'content' => $response->getContent()
        ]);

        return $response;
    }
}
