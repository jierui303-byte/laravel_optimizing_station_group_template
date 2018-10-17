<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //判断session是否存在 不存在重新登录
        if (!session('user')) {
            return redirect('admin/login');
        }
//        echo 'jierui';

        return $next($request);
    }
}
