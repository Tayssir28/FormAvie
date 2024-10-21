<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckSession
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
        // Check if the session is empty or does not have the required key
        if (!Session::has('your_session_key')) {
            // Redirect to the /signIn route
            return redirect('/signIn');
        }

        return $next($request);
    }
}
