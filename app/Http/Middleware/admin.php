<?php

namespace App\Http\Middleware;

//use Illuminate\Contracts\Auth\Guard;

use Closure;
use Illuminate\Support\Facades\Auth;

//use Session;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    /*protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }
    */

/*
    public function handle($request, Closure $next)
    {
        switch($this->auth->user()->role_ids)
        {
            case '1':
                //return redirect()->to('admin');
                break;

            case '2':
                return redirect()->to('user');
                break;
            default:
                return redirect()->to('login');
                break;    

        }
        return $next($request);
    }
 */ 

    
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_ids='admin')
            return $next($request);

        return redirect('login');
    }
    
}
