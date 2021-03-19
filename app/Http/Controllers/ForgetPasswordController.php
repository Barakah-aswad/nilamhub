<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use Mail;
use App\User;

class ForgetPasswordController extends Controller
{
    public function index(){
    	return view('authentication.forgot_password.forgot_password');
    }

    public function store(Request $request){

    	$user = User::whereEmail($request->email)->first();

    	if($user === null){

    		return redirect()->back()->with(['success' => 'Kode berhasil di kirim ke email anda']);
    		sleep(3);
    	
    	}else{

    		$user = User::whereEmail($request->email)->first();
    		$reminder = Reminder::exists($user) ? : Reminder::create($user);
    		$this->sendEmail($user, $reminder->code);

    		return redirect()->back()->with(['success' => 'Kode berhasil di kirim ke email anda']);

    	}
    }

    public function resetPassword($email, $reset_code){

    	$user = User::byEmail($email);

    	if (is_null($user)) {
    		abort(404);
    	}

    	$rmd = Reminder::all();

    	dd($rmd);

    	// if(Reminder::exists($user)) {
    		
    	// 	if(Reminder::exists($user, $reset_code)) {
    	// 		return view('authentication.forgot_password.reset_password');

    	// 	}else{

    	// 		return redirect('/');
    	// 	}
    	// }else{
    	// 	return redirect('/');
    	// }
    }

    public function postResetPassword(Request $request , $email, $reset_code ){

    	$user = User::byEmail($email);


    	$this->validate($request, [
    		'password' => 'confirmed|required|min:8|max:15',
    		'password_confirmation' => 'required|min:8|max:15'
    	]);

    	if (is_null($user)) {
    		abort(404);
    	}

    	if ($reminder = Reminder::exists($user)) {
    		if ($reminder == $reset_code) {
    			Reminder::complete($user, $reset_code, $request->password);
    			return redirect('/login')->with(['success' => 'Silahkan login ulang dengan password baru']);
    		}else{

    			return redirect('/');
    		}

    	}else{

    		return redirect('/');
    	}
    }

    private function sendEmail($user, $code){

    	Mail::send('authentication.emails.forgot_password',[
    		'user' => $user,
    		'code' => $code
    	], function($message) use ($user){
    		$message->to($user->email);
    		$message->subject("Hallo $user->first_name. !. Klik link berikit untuk reset akun anda");
    	});
    }
}
