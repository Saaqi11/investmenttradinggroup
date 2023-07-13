<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckPaymentStatus
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Application|RedirectResponse|Redirector|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->check() && !auth()->user()->hasRole('admin') && auth()->user()->hasAnyRole(['L1', 'L2', 'L3', 'L4'])) {
                $user = User::where("id", Auth::user()->id)->first();
                $subscriptionDate = Carbon::parse($user->subscription_avail_date);
                $endDate = Carbon::now();
                if (!$subscriptionDate->greaterThan($endDate)) {
                    return redirect(route('re-subscription'));
                }
            }
        }
        return $next($request);
    }
}
