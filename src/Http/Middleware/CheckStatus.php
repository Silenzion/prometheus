<?php

namespace Voletale\Prometheus\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Silenzion\Prometheus\Models\User;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->status !== User::STATUS_ACTIVE) {
            Auth::logout();
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
