<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class BlockCheckMiddleware
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
        $user = Auth::user();
        if($user->is_block =='yes')
        {
            return redirect()->route('blockpage');
        }
        return $next($request);
    }
}
