<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next, $hak_akses)
    {
        if ($request->user()->hak_akses == $hak_akses) {
            return $next($request);
        }

        return redirect()
            ->to(route('login'));
    }    
}
