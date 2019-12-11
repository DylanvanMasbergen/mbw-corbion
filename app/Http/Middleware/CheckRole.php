<?php
namespace App\Http\Middleware;
use Closure;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($request->user()->role->name === 'Shiftmanager'){
            return $next($request);
        }
        if($request->user()->role->name != $role){
            return redirect()->back()->with('error', 'Login met een shiftmanager account om dit aan te kunnen passen.');
        }
        if($request->user()->role->name === 'Operator') {
            return redirect()->back()->with('error', 'Login met een shiftmanager of spillteam account om dit aan te kunnen passen.');
        }
        return $next($request);
    }
}