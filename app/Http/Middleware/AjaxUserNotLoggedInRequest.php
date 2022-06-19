<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AjaxUserNotLoggedInRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check())
        {
            return response()->json([
                'error' => 'Vous n’êtes pas autorisé à effectuer cette demande!'
            ], 401);
        }

        return $next($request);
    }
}
