<?php

namespace App\Http\Middleware;

use App\Enums\Statuses;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (!auth()->check())
        {
            return redirect()->route('login');
        }

        if (!$request->user()->is_admin) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
