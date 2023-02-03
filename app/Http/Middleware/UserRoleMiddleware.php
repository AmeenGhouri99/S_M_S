<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use auth;
class UserRoleMiddleware
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
        if(auth()->user()->user_role==1 OR auth()->user()->user_role==2 OR auth()->user()->user_role==0)
        {
        return $next($request);
        }
        else{
        return redirect('login')->with("error","You can't access this page");
        }
    }
}
