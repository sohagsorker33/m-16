<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         $Key=$request->header('key');
         if($Key=='123'){
            return $next($request);
         }else{
            //return redirect('/demo3');
            return response()->json(['message' => 'Unauthorized'], 401);  
         }
       
    }
}
