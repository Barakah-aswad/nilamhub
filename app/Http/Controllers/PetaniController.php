<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petani;
use App\Aktivasi_akun;
use Sentinel;

class PetaniController extends Controller
{
    public function index(){
    	$check = aktivasi_akun::all();
    	return $check[0]->verifed;

    	return view('Petani.petani_index',compact('ab'));
    }
}
