<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;
use App\Aktivasi_akun;
use App\Profil;
use App\User;
use DB;
use Carbon;

class PengunjungController extends Controller
{
	public function index(){
    	return view('Pengunjung.pengunjung');
	}

	public function getUserId(){

		return $user_id = Sentinel::getUser()->id;
	}

	public function getUserRole(){
		return $role_id = Sentinel::getUser()->roles()->id = 3;
	}

	public function getIdPetani(){
		
		$user = User::find($this->getUserId());
		return $user->petani->id;
	}

	public function buatAkunPetani(){
		
		// $user = DB::table('users')
		// 			->join('profils','users.id','=','profils.user_id')
		// 			->select('users.*','profils.*')
		// 			->where('users.id','=',$this->getUserId())
		// 			->get();
		$user = User::findOrFail($this->getUserId());

		if (is_null($user->profil)) {
			return redirect('/profil-pengunjung')->with(['error' => 'Harap Lengkapi data profil sebelum mendaftar']);
		}else{
			return view('invoce.invoce_register_petani',compact('user'));
		}
		
		// if (!$user->profil == null) {
		// 	
		// }else{
		// 	
		// }
		
	}

	public function verifikasiAkun()
    {
        //$verifed = aktivasi_akun::all();
        $user = DB::table('users')
                ->join('aktivasi_akuns','users.id', '=', 'aktivasi_akuns.user_id')
                ->join('petanis','users.id', '=', 'petanis.user_id')
                ->select('users.first_name',
                        'petanis.user_id','petanis.nomor_ktp','petanis.alamat_lengkap',
                        'aktivasi_akuns.verifed','aktivasi_akuns.created_at',
                        'aktivasi_akuns.id','aktivasi_akuns.verifed','aktivasi_akuns.waktu_verifikasi')
                ->get();
       
        return view('authentication.admin.daftar_user.verifikasi_akun',compact('user'));
    }

	public function simpanAkunPetani(Request $request)
	{
		
		$rating = 1;

		$dlt_role 		   = Sentinel::findById($this->getUserId()); //Delete Role
		$rol_dlt  		   = Sentinel::findRoleBySlug('pengunjung');

		$petani 		   = new petani;							//Create user
		$petani->user_id   = $this->getUserId();
		$petani->rating    = $rating;

		

		$aktiva 		   = new aktivasi_akun;						//Create Aktifa
		$aktiva->user_id   = $this->getUserId();
		
		$nw_role1          = Sentinel::findById($this->getUserId()); //Rename Role
		$nw_role           = Sentinel::findRoleBySlug('petani');

		
		$rol_dlt->users()->detach($dlt_role);
		$petani->save();
		$aktiva->save();
		$nw_role->users()->attach($this->getUserId());
		
		Sentinel::logout(null, true);
		return redirect('/login')->with(['success' => 'Saat ini anda dalam prosess verivikasi data']);
	}

	protected function expires() : Carbon
	{
		return Carbon::now()->subSecond($this->expires);
	}

}
