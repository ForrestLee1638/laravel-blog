<?php

namespace App\Http\Middleware;

use Closure;

class Limingdong
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    { if(session()->has('uid')==false){
      return redirect('login');
 }
else
 return $next($request);
}

}
