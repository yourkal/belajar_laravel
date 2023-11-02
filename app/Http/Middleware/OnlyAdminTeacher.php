<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyAdminTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //bisa melewati middleware ini jika rolenya admin(role_id = 1) dan teacher(role_id = 2)
        if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2) {
            abort(404);
        }
        // dd(Auth::user());

        return $next($request);
    }
}
