<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthKey
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
        $token = $request->header('APP_KEY');
        // if($token != '123'){
        //     return response()->json(['message'=>'App key invalid'], 401);
        // }

        if(Auth::onceBasic()){
            return response()->json(['message'=>'Auth Failed'], 401);
        }else{
            return $next($request);
        }

    }
}
