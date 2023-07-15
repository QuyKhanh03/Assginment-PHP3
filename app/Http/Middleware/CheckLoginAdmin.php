<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check()){
            return redirect()->route('login');
        }else{
            if(auth()->user()->role == 1){
                return $next($request);
            }else{
                return redirect()->route('login')->with('error','Bạn không có quyền truy cập vào trang này');
            }
        }
    }
}
