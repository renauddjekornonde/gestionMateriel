<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role == 'Administrateur'){
                return $next($request);
            }else{
                return redirect('')->with('sucess','Vous n\'êtes pas un administrateur');
            }
        }
        elseif(Auth::user()->role == 'Gerant'){
                return $next($request);
            }else{
                return  view('gerant.auth.login')->with('sucess','Vous n\'êtes pas un gerant');
            }
        // else
        // {
        //     return redirect('')->with('sucess','Veuillez vous connecter d\'abord');
    
        // }

    }
   
}
