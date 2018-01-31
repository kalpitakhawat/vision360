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
        }else if ($user->status == 'rejected' && strpos($request->path(), 'reject') == false) {
            return redirect('register/reject');
        }
        else if ($user->status == 'blocked' && strpos($request->path(), 'block') == false) {
            return redirect('register/block');
        }
        elseif ($user->status == 'active' && (strpos($request->path(), 'pending') == true || strpos($request->path(), 'second') == true || strpos($request->path(), 'donation') == true || strpos($request->path(), 'rejected') == true || strpos($request->path(), 'blocked') == true)) {
            return redirect('/');
        }
        return $next($request);
    }
}
