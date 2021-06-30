<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petani;
use App\Aktivasi_akun;
use Sentinel;
use App\User;
use App\Lahan;
use DB;

class PetaniController extends Controller
{
    public function index(){

        return view('Petani.petani_index');
    }

    public function registrasiLahan()
    {
        return view('Lahan.registrasi_lahan');
    }

    private function getUserId()
    {
        $id = User::findOrFail(Sentinel::getUser()->id);
        return $id;
    }

    public function simpanLahan(Request $request)
    {
        //return $request->all();
        

        $lat = 1000;
        $log = 2000;

        $this->validate($request,[
            'total_luas'     => 'required|integer',
            'alamat_lahan'   => 'required',
            'no_sertifikat'  => 'required|unique:lahans',
            'status_tanah'   => 'required',
            'tahun_garap'    => 'required|integer',
            'jenis_pengaman' => 'required',
            'jrk_lahan'      => 'required|integer'
        ]);

        $lahan                 = new lahan;
        $lahan->petani_id      = $this->getUserId()->petani->id;
        $lahan->total_luas     = $request->total_luas;
        $lahan->alamat_lahan   = $request->alamat_lahan;
        $lahan->no_sertifikat  = $request->no_sertifikat;
        $lahan->status_tanah   = $request->status_tanah;
        $lahan->tahun_garap    = $request->tahun_garap;
        $lahan->jenis_pengaman = $request->jenis_pengaman;
        $lahan->jrk_lahan      = $request->jrk_lahan;
        $lahan->lat            = $lat;
        $lahan->log            = $log;

        //return $lahan;
        $lahan->save();
        return redirect('/daftar-lahan');
    }
    public function daftarLahan()
    {
        $lahan = Lahan::where('petani_id','=', $this->getUserId()->petani->id)->get();
        //return $lahan;
        return view('Lahan.daftar_lahan',compact('lahan'));
    }

    public function proposalTanam()
    {
        //$proposal =
    }
}
