<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MonthNum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->num > 12 || $request->num <1) {
            return redirect('invalid/Invalid Month Number');
        }
        return $next($request);
    }
}
