<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SubAdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (($user->type == "subadmin")||($user->type == "admin")||($user->type == "superadmin")) {

            return $next($request);
        }
        else
        {
            return redirect()->route('logout');
        }
    }
}
