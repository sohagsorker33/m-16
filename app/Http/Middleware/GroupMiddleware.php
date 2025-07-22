<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GroupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $url_paramiter=$request->url_paramiter;
        if($url_paramiter=='12345'){
             return $next($request);
        }else{
            return response()->json(['message' => 'Unauthorized'], 401);  
        }
        
    }
}
