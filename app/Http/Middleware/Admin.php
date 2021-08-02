<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class Admin
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
        /* this way using guard

        $user = User::where('isAdmin','1')->get();
        //return  response()->json($user);
        if($guard != null && !isset($user))
            return $next($request);
        return  redirect()->back();
        */

        /* this another way with group of middleware auth and admin */
        if(Auth::user()->isAdmin)
            return $next($request);
        return  redirect('/')->with('message','you are not allowed');

    }
}
