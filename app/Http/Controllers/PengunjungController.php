<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;

class PengunjungController extends Controller
{
	public function index(){
    	return view('Pengunjung.pengunjung');
	}	

	public function buatAkunPetani(){
		return view('authentication.daftar_akun_petani.register_akun_petani');
	}

	public function getUserId(){
		return $user_id = Sentinel::getUser()->first()->id;
	}

	public function getUserRole(){
		return $role_id = Sentinel::getUser()->roles()->id = 3;
	}

	public function simpanAkunPetani(Request $request){

		$dlt_role = Sentinel::findById($this->getUserId());
		$rol_dlt  = Sentinel::findRoleBySlug('pengunjung');
		$rol_dlt->users()->detach($dlt_role);


		$petani = new petani;
		$petani->user_id = $this->getUserId();
		$petani->nomor_kk = $request->nomor_kk;
		$petani->nomor_ktp = $request->nomor_ktp;
		$petani->alamat_lengkap = $request->alamat_lengkap;
		$petani->umur = $request->umur;
		$petani->jml_angg_klg = $request->jml_angg_klg;
		$petani->agama = $request->agama;
		$petani->tmp_lahir = $request->tempat_lahir;
		$petani->tgl_lahir = $request->tgl_lahir;
		$petani->role_id = $this->getUserRole();
		//return $petani;
		$petani->save();


		$nw_role = Sentinel::findById($this->getUserId());
		$nw_role = Sentinel::findRoleBySlug('petani');
		$nw_role->users()->attach($petani);


		
		Sentinel::logout(null, true);
		return redirect('/login')->with(['succsess' => 'Anda di alihkan untuk login ulang']);
	}
}
