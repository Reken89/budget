<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Master
{

    public function handle($request, Closure $next)
    {

        if(Auth::user()->role() !== "master"){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
