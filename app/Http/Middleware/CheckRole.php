<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    const DELIMITER = '|';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $userRole = Auth::user()->role;

        $roles = explode(self::DELIMITER, $role);

        foreach ($roles as $role) {
            if ($role == $userRole) {
                return $next($request);
            }
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
