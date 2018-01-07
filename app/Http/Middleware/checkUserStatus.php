<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkUserStatus
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
        if ($user->status == 'register' && strpos($request->path(), 'second') == false) {
            return redirect('register/second');
        }else if ($user->status == 'donation' && strpos($request->path(), 'donation') == false) {
            return redirect('register/donation');
        }else if ($user->status == 'applied' && strpos($request->path(), 'pending') == false) {
            return redirect('register/pending');
        }
        return $next($request);
    }
}
