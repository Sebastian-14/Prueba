<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Contratcs\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
    
/*
    public function handle($request,Closure $next)
    {
        if($this->auth->check()){
            switch($this->auth->user()->role_ids)
            {
                case '1':
                    return redirect()->to('admin');
                    break;
                case '2':
                    return redirect()->to('user');
                    break;
            }
            return redirect('/admin');
        }
        return $next($request);
    }
*/
}
