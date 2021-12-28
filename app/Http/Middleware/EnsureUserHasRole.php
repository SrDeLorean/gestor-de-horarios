<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

class EnsureUserHasRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->role != $role) {
            if($request->user()->role == "admin"){
                return redirect()->route('admin_dashboard');
            }elseif ($request->user()->role == "attendant") {
                return redirect()->route('attendant_dashboard');
            }else{
                return redirect()->route('user_dashboard');
            }
        }

        return $next($request);
    }

}