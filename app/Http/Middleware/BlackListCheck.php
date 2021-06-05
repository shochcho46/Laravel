<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlackListCheck
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

        if (($user->status == "blacklist")) {
            return redirect()->route('normal.login')->with('fail', 'This accout is black listed');;
        }
        else
        {
            return $next($request);

        }
    }
}
