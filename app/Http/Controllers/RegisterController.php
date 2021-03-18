<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
Use Activation;
use Mail;

class RegisterController extends Controller
{
    public function index(){
    	return view('authentication.login.register');
    }

    public function create(){
    	return view('authentication.login.register');
    }

    public function store(Request $request){

    	$user = Sentinel::register($request->all());
    	$aktifasi = Activation::create($user);
    	$role = Sentinel::findRoleBySlug('pengunjung');
    	$role->users()->attach($user);

    	$this->kirimEmail($user,$aktifasi->code);
    	return redirect('/login');

    }

    private function kirimEmail($user, $code){
    	Mail::send('authentication.emails.activation',[
    		'user' => $user,
    		'code' => $code
    	], function($message) use ($user){
    		$message->to($user->email);
    		$message->subject("Hallo $user->first_name. Klik link berikut untuk aktifkan akun anda");
    	});
    }
}
