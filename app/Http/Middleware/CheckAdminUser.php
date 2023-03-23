<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CheckAdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->check() && !auth()->user()->hasRole('admin')) {
                auth()->logout();
                Session::flash("You are not authorised for this action");
                return redirect(route('login'));
            }
        }
        return $next($request);
    }
}
