<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Auth;

class CheckCompany
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if( \App\User::find(Auth::id())->role_id !== 2){
            return redirect('/home');
         }
        return $next($request);
    }
}
