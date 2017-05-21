<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminMiddleware
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
        if(Auth::check() && Auth::user()->rid == 1) {
            return $next($request);
        } else {
            return redirect('administrator/login')->with('auth_error', 'Bạn không có quyền truy cập vào trang này. ');
        }
    }
}
