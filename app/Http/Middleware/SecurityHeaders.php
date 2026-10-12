<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=(), payment=()');
        $response->headers->set('X-Permitted-Cross-Domain-Policies', 'none');

        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

        if (config('security.csp')) {
            $response->headers->set('Content-Security-Policy', implode('; ', [
                "default-src 'self'",
                "base-uri 'self'",
                "object-src 'none'",
                "frame-ancestors 'self'",
                "form-action 'self'",
                "script-src 'self' http://localhost:5173 http://127.0.0.1:5173 http://[::1]:5173",
                "style-src 'self' 'unsafe-inline' http://localhost:5173 http://127.0.0.1:5173 http://[::1]:5173",
                "img-src 'self' data: https: http:",
                "font-src 'self' data:",
                "connect-src 'self' ws://localhost:5173 ws://127.0.0.1:5173 ws://[::1]:5173 wss://localhost:5173 wss://127.0.0.1:5173 wss://[::1]:5173",
                "manifest-src 'self'",
                "media-src 'self'",
            ]));
        }

        return $response;
    }
}