<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;
use DB;

class AdminController extends Controller
{
    public function index(){
    	return view('authentication.admin.main_admin');
    }

    public function daftarPeserta(){

    	$user = Sentinel::getUser()->get();
    	$petani = DB::table('users')
    			->join('petanis','users.id', '=' ,'petanis.id')
    			->select('petanis.*','users.*')
    			->get();

    	return view('authentication.admin.daftar_user.daftar_user',compact('user','petani'));


    }
}
