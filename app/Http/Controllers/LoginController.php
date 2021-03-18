<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
class LoginController extends Controller
{
    public function index(){
    	return view('authentication.login.login');
    }

    public function postLogin(Request $request){

		if(Sentinel::authenticate($request->all())){

			$slug = Sentinel::getUser()->roles()->first()->slug;
			if($slug == 'admin'){
				return redirect('/admin');
			}elseif($slug == 'pengunjung'){
				return redirect('/visitor');
			}
		}else{
			return redirect()->back()->with(['error' => 'Email dan Password anda Salah']);
		}
    }


    public function logout(){
    	Sentinel::logout();
    	return redirect('/');
    }
}
