<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Activation;
use Sentinel;

class AktifasiController extends Controller
{
    public function aktifasi($email, $code){

    	$user = User::whereEmail($email)->first();

    	if (Activation::complete($user, $code)) {
    		return redirect('/login');
    	}else{
    		
    	}
    }
}
