<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use App\Aktivasi_akun;

class PetaniMiddleware
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
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'petani') {

            if (Aktivasi_akun::select('verifed')->where('verifed','=', true)->find(Sentinel::getUser()->id)) {
                return $next($request);
            }else{
                Sentinel::logout(null,true);
                return redirect('/login')->with(['error' => 'Maaf Akun anda dalam proses aktivasi']);
            }
            
        }else{
            return redirect('/');
        }
        
    }
}
