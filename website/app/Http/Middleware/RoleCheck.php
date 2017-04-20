<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if (!Auth::check()) {
            if ($role != 'Visiter') {
                return redirect('/login');
            }
            return $next($request);
        }

        $user_role = (Auth::user()->RoleInfo->Role == $role) || (Auth::user()->RoleInfo->Father == $role);
        if (!$user_role) {
            if (Auth::user()->RoleInfo->Role == 'Salesperson') {
                return redirect('/dashboard');
            }

            session()->flash('message', 'Sorry, you do not have the access level!');
            return redirect('/');
        }

        return $next($request);
    }
}
