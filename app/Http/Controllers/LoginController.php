<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function index(){
    	return view('authentication.login.login');
    }

    public function postLogin(Request $request){

    	$remember_me = false;

    	if(isset($request->$remember_me))

    		$remember_me = true;

    	try {

	    		if(Sentinel::authenticate($request->all(), $remember_me)){

				$slug = Sentinel::getUser()->roles()->first()->slug;

				if($slug == 'admin')
                {
					return redirect('/manager');

				}elseif($slug == 'pengunjung')
                {
					return redirect('/visitor');
				}

			}else{

				return redirect()->back()->with(['error' => 'Email dan Password anda Salah']);
			}
    		
    	} catch (NotActivatedException $e) {

    		return redirect()->back()->with(['error' => 'Akun anda belum di aktivasi']);
    	}

        // $ck = Sentinel::getUser()->roles()->first()->slug;
        // dd($ck);
		
    }


    public function logout(){
    	Sentinel::logout();
    	return redirect('/');
    }
}
