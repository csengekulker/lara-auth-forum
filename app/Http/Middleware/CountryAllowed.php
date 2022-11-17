<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CountryAllowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
 
        if( $request->country && !in_array( $request->country, array( "hu", "at" ))) {
     
            return redirect( "no-allowed" );
        }
        return $next( $request );
    }
}
