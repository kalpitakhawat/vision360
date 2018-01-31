<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsNotAdmin
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
        if (Auth::check()) {
            $u = Auth::user();
            if($u->type == 'admin'){
                return redirect()->route('admin.dashboard');
            }    
            return $next($request);    
        }
    
        return $next($request);
    }
}
