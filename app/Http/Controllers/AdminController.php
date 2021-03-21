<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;

class AdminController extends Controller
{
    public function index(){
    	return view('authentication.admin.main_admin');
    }

    public function daftarPeserta(){

    	$user = Sentinel::getUser()->get();
    	$petani = Petani::all();

    	return view('authentication.admin.daftar_user.daftar_user',compact('user','petani'));


    }
}
