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

	public function buatAkunPetani(){
		
		// $user = DB::table('users')
		// 			->join('profils','users.id','=','profils.user_id')
		// 			->select('users.*','profils.*')
		// 			->where('users.id','=',$this->getUserId())
		// 			->get();
		$user = User::find($this->getUserId());
		return view('invoce.invoce_register_petani',compact('user'));
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

	public function simpanAkunPetani(Request $request, $id)
	{
		$rating = 0;

		$dlt_role 		   = Sentinel::findById($id); //Delete Role
		$rol_dlt  		   = Sentinel::findRoleBySlug('pengunjung');

		$petani 		   = new petani;							//Create user
		$petani->user_id   = $id;
		$petani->rating    = $rating;

		

		$aktiva 		   = new aktivasi_akun;						//Create Aktifa
		$aktiva->user_id   = $id;
		$aktiva->petani_id = $petani->user_id;

		//echo " Petani: $petani, Aktiva: $aktiva";
		$nw_role1          = Sentinel::findById($id); //Rename Role
		$nw_role           = Sentinel::findRoleBySlug('petani');

		
		$rol_dlt->users()->detach($dlt_role);
		$petani->save();
		$aktiva->save();
		$nw_role->users()->attach($this->getUserId());
		
		Sentinel::logout(null, true);
		return redirect('/login')->with(['succsess' => 'Anda di alihkan untuk login ulang']);
	}

	protected function expires() : Carbon
	{
		return Carbon::now()->subSecond($this->expires);
	}

}
