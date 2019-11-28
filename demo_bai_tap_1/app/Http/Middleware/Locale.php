<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class Locale
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
        if (!Session::has('message')){
            Session::put('message','app.locale');
        }
        Lang::setLocale(Session::get('message'));
        return $next($request);
    }
}
