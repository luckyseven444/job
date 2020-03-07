<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkApplicant
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
        if( \App\User::find(Auth::id())->role_id !== 3){
            return redirect('/home');
        }
        return $next($request);
    }
}
