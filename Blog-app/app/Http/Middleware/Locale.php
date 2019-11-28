<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Closure;

class Locale
{
    public function handle($request,Closure $next){
        if (!Session::has('message')){
            Session::put('message','app.locale');
        }
        Lang::setLocale(Session::get('message'));
        return $next($request);
    }
}
