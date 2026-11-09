<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogHttpLifecycle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('リクエストを受信しました', [
            'method' => $request->method(),
            'url' => $request->url(),
            'input' => $request->except(['password', '_token']),
        ]);
        $response = $next($request);
        \Log::info('レスポンスを返します', [
            'status' => $response->status(),
        ]);
        return $response;
    }
}
