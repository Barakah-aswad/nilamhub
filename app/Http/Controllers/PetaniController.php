<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petani;
use App\Aktivasi_akun;
use Sentinel;
use DB;
class PetaniController extends Controller
{
    public function index(){

    	
    	if ($id = Sentinel::getUser()->id) {
    		$aktiva = DB::table('aktivasi_akuns')->select('user_id','verifed')
    										   ->where('user_id','=',$id)
    										   ->get();
    		//$dt[] = json_decode($data,true);
    		$data = $aktiva[0]->verifed;
    		return view('Petani.petani_index',compact('data'));
    	}else{
    		Sentinel::logout(null, true);
    	}
    	
   		
   		//$data = json_decode($check, true);
   		//$data = $data["data"];
    	//$data = json_decode($dt,true);
    }

    public function registrasiLahan()
    {
        return view('Lahan.registrasi_lahan');
    }
}
