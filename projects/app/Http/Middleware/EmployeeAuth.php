<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployeeAuth
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
        
        $user=auth()->guard('employee')->user();
        if(!$user) {
            return redirect()->url('company-ads')->with("success","You have successfully logged in!");
           /* return response()->json([
                'status' => 'failed',
                'message' => 'Please login to continue'
            ], 200);*/
 //abort(401);
        }
        $request->merge(compact('user'));
        return $next($request);
    }
}
