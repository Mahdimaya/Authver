<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAuthFields
{
    public function handle($request, Closure $next)
    {
        if (!$request->has('numero') || !$request->has('otp_code')) {
            return response()->json(['message' => 'Les champs "numero" et "otp_code" sont requis'], 422);
        }
        return $next($request);
    }
}
