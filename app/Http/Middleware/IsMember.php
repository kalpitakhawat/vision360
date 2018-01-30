<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsMember
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
        if($user->type == 'user'){
            return $next($request);
        } else if ($user->type == 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
           return redirect()->route('home');
        }
    }
}
