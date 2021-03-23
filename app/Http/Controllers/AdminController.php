<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;
use App\Aktivasi_akun;
use App\User;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
    	
        $usercount = DB::table('users')->count();
        return view('authentication.admin.main_admin', compact('usercount'));
    }

    public function daftarPeserta(){
    	$user = Sentinel::getUser()->get();
    	$petani = DB::table('users')
    			->join('petanis','users.id', '=' ,'petanis.user_id')
    			->select('petanis.*','users.*')
    			->get();
    	return view('authentication.admin.daftar_user.daftar_user',compact('user','petani'));
    }

    public function verifikasiAkun(){

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

    public function showAktifasi($id){

        $verifikasi = aktivasi_akun::findOrFail($id);
        return view('invoce.invoce',compact('verifikasi')); 
    }

    // protected function expires() : Carbon
    // {
    //     return Carbon::now()->timestamp;
    // }

    public function storeAktifasi(Request $request, $id){

        //$exp = $this->expires();
        $aktifer  = Sentinel::getUser()->id;
        $updateAktivasi = aktivasi_akun::findOrFail($id);

        $updateAktivasi->user_id = $updateAktivasi->userAktiva->id;
        $updateAktivasi->petani_id = $updateAktivasi->petaniAktiva->id;
        $updateAktivasi->verifed_by = $aktifer;
        $updateAktivasi->verifed = true;
        $updateAktivasi->waktu_verifikasi = Carbon::now();

        //return $updateAktivasi;
        $updateAktivasi->save();
        return redirect('/verifikasi-akun');
    }
}
