<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccessControlAllowOrigin
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
        return $next($request)
            ->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Methods','POST,GET,PATCH,OPTIONS,PUT,DELETE')
//            ->header('Access-Control-Allow-Headers','Origin,Content-Type,Accept,Authorization,X-Requested-With')
            ->header('Access-Control-Allow-Headers','Origin,Content-Type,Accept,Cookie, X-Auth-Token,Authorization, X-Requested-With')
//            ->header('Access-Control-Allow-Credentials', 'true')
            ;
    }
}
