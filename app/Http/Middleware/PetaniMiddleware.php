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
            
            $user = Sentinel::getUser()->id;
            $aktiva = Aktivasi_akun::where('user_id',$user)->first();

            if ($aktiva->verifed == true) {
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
