<?php

namespace App\Http\Middleware;

use Closure;

class Dologin
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
		$res = session('res');
		if(!$res){
		   return redirect('/login/login');
		}
        return $next($request);
    }
}
