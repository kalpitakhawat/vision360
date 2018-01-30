<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsAdmin
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
        $user=Auth::user();
        if($user->type == 'admin'){
            return $next($request);
        } else if ($user->type == 'user') {
            return redirect()->route('home');
        } else {
           return redirect()->route('home');
        }
    }
}
