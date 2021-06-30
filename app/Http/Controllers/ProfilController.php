<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Wilayah;
use App\User;
use Sentinel;

class ProfilController extends Controller
{
	public function index(){
		$user = User::findOrFail($this->getUserId());
		if (is_null($user->profil)) {
			return redirect('/profil-pengunjung')->with(['error' => 'Harap mengisi data profil anda terlrbih dahulu']);
		}else{
			return view('Profil.profil_index',compact('user'));
		}
	}

    public function registerProfil()
    {
    	$wilayah = Wilayah::all();
    	$user = User::findOrFail($this->getUserId());
    	return view('Profil.register_profil',compact('user','wilayah'));
    }

    public function getUserId(){
    	return Sentinel::getUser()->id;
    }

    public function simpanProfil(Request $request)
    {

		$this->validate($request,[
			'nomor_kk' 		 => 'required|unique:profils|integer|min:5',
			'nomor_ktp' 	 => 'required|unique:profils|integer|min:5',
			'umur'      	 => 'required|integer|min:2',
			'jenis_kelamin'  => 'required',
			'no_telepon' 	 => 'required|integer',
			'pekerjaan' 	 => 'required',
			'wilayah'        => 'required',
			'tgl_lahir' 	 => 'required|date',
			'alamat_lengkap' => 'required',
			'jml_angg_klg'   => 'required|integer',
			'tmp_lahir'   => 'required'
		]);

		$profil 				 = new profil;
		$profil->user_id         = $this->getUserId();
		$profil->nomor_kk 		 = $request->nomor_kk;
		$profil->nomor_ktp 		 = $request->nomor_ktp;
		$profil->umur  			 = $request->umur;
		$profil->jenis_kelamin   = $request->jenis_kelamin;
		$profil->no_telepon 	 = $request->no_telepon;
		$profil->pekerjaan 		 = $request->pekerjaan;
		$profil->wilayah         = $request->wilayah;
		$profil->alamat_lengkap  = $request->alamat_lengkap;
		$profil->jml_angg_klg 	 = $request->jml_angg_klg;
		$profil->agama 			 = $request->agama;
		$profil->tmp_lahir 		 = $request->tmp_lahir;
		$profil->tgl_lahir 		 = $request->tgl_lahir;

		//return $profil;
		$profil->save();
		if(Sentinel::getUser()->roles()->first()->slug == 'petani')
		{
			return redirect('/profil_petani');
		}elseif(Sentinel::getUser()->roles()->first()->slug == 'pengunjung')
		{
			return redirect('/profil_index');
		}elseif(Sentinel::getUser()->roles()->first()->slug == 'admin')
		{
			return redirect('/profil_admin');
		}
	}

	public function editProfil($id)
	{
		$profil = Profil::findOrFail($id);
		return view('Profil.edit_profil',compact('profil'));
	}

	public function simeditProfil(Request $request, $id)
	{
		$profil = Profil::findOrFail($id);

		$profil->user_id         = $this->getUserId();
		$profil->nomor_kk 		 = $request->nomor_kk;
		$profil->nomor_ktp 		 = $request->nomor_ktp;
		$profil->umur  			 = $request->umur;
		$profil->jenis_kelamin   = $request->jenis_kelamin;
		$profil->no_telepon 	 = $request->no_telepon;
		$profil->pekerjaan 		 = $request->pekerjaan;
		$profil->alamat_provinsi = $request->alamat_provinsi ;
		$profil->alamat_lengkap  = $request->alamat_lengkap;
		$profil->jml_angg_klg 	 = $request->jml_angg_klg;
		$profil->agama 			 = $request->agama;
		$profil->tmp_lahir 		 = $request->tmp_lahir;
		$profil->tgl_lahir 		 = $request->tgl_lahir;

		//dd($profil);
		$profil->save();

		if(Sentinel::getUser()->roles()->first()->slug == 'petani')
		{
			return redirect('/profil_petani');
		}elseif(Sentinel::getUser()->roles()->first()->slug == 'pengunjung')
		{
			return redirect('/profil_index');
		}elseif(Sentinel::getUser()->roles()->first()->slug == 'admin')
		{
			return redirect('/profil_admin');
		}

	}
}
