<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Petani;
use App\Aktivasi_akun;
use App\Lahan;
use App\Komoditas;
use App\Hama;
use App\User;
use App\Tanaman;
use App\Penyakit;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
    	
        $usercount = DB::table('users')->count();
        return view('authentication.admin.main_admin', compact('usercount'));
    }

    protected function getUserID(){
        $id = Sentinel::getUser()->id;
        return $id;
    }

    public function daftarPeserta(){
    	$user = Sentinel::getUser()->get();
    	$petani = DB::table('users')
    			->join('petanis','users.id', '=' ,'petanis.user_id')
    			->select('petanis.*','users.*')
    			->get();
    	return view('authentication.admin.daftar_user.daftar_user',compact('user','petani'));
    }

    public function verifikasiAkun()
    {

        //$verifed = aktivasi_akun::all();
        // $user = DB::table('users')
        //         ->join('aktivasi_akuns','users.id', '=', 'aktivasi_akuns.user_id')
        //         ->join('profils','users.id', '=', 'profils.user_id')
        //         ->select('users.first_name',
        //                 'profils.user_id','profils.nomor_ktp','profils.alamat_lengkap',
        //                 'aktivasi_akuns.verifed','aktivasi_akuns.created_at',
        //                 'aktivasi_akuns.id','aktivasi_akuns.verifed','aktivasi_akuns.waktu_verifikasi')->get();

       //$guard = Sentinel::getUser()->roles()->first()->slug == 'petani';
       $user = Aktivasi_akun::all(); 
       //return $user;

           return view('authentication.admin.daftar_user.verifikasi_akun',compact('user'));

        
    }

    public function showAktifasi($id){

        $verifikasi = User::findOrFail($id);
        //return $verifikasi;
        return view('invoce.invoce',compact('verifikasi')); 
    }
    
    public function storeAktifasi(Request $request, $id){

        //$exp = $this->expires();
        $aktifer  = Sentinel::getUser()->id;
        $updateAktivasi = aktivasi_akun::findOrFail($id);

        $updateAktivasi->user_id = $updateAktivasi->userAktiva->id;
        $updateAktivasi->verifed_by = $aktifer;
        $updateAktivasi->verifed = true;
        $updateAktivasi->waktu_verifikasi = Carbon::now();

        //return $updateAktivasi;
        $updateAktivasi->save();
        return redirect('/verifikasi-akun');
    }
    // Komoditas
    public function komoditasIndex(){
        $komoditas = komoditas::all();
        //return $komoditas->tanaman;
        return view('authentication.admin.Komoditas.index',compact('komoditas'));
    }

    public function tambahKomoditas()
    {
        $tanaman  = Tanaman::all();
        $hama     = Hama::all();
        $penyakit = Penyakit::all();
        return view('authentication.admin.Komoditas.tambah_komoditas',compact('tanaman','hama','penyakit'));
    }

    public function detailKomoditas($id)
    {   
        
        //return $hama;
        $komoditas = komoditas::findOrFail($id);
        //$hama = Hama::all()->where('ke_tanaman',$komoditas->nama_komoditas)->first();
        //$hama = DB::table('hamas')->whereJsonContains('ke_tanaman','==', $komoditas->nama_komoditas);
        $hama = Hama::all();
        $artikel = Hama::all()->where('ke_tanaman','=', $komoditas->nama_komoditas)->first();
        // $dftr = $hama->ke_tanaman;
        //return $hama;
        return view('Komoditas.detail_komoditas',compact('komoditas','hama','artikel'));
        
    }

    public function simpanKomoditas(Request $request)
    {

        $this->validate($request,[
            'tanaman_id'        => 'required|unique:komoditas',
            'jenis_hama'        => 'required',
            'jenis_penyakit'    => 'required',
            'masa_tanam'        => 'required|integer',
            'ph_tanah'          => 'required',
            'stdr_tinggi_lahan' => 'required|integer',
            'deskripsi'         => 'required'
        ]);

        $komoditas                    = new Komoditas;
        $komoditas->post_by           = $this->getUserID();
        $komoditas->tanaman_id        = $request->tanaman_id;
        $komoditas->jenis_hama         = $request->jenis_hama;
        $komoditas->jenis_penyakit    = $request->jenis_penyakit;
        $komoditas->masa_tanam        = $request->masa_tanam;
        $komoditas->ph_tanah          = $request->ph_tanah;
        $komoditas->stdr_tinggi_lahan = $request->stdr_tinggi_lahan;
        $komoditas->deskripsi         = $request->deskripsi;
        //return $komoditas;
        $komoditas->save();
        return redirect('/daftar-komoditas')->with(['success' => 'Komoditas Berhasil di simpan']);
    }

    public function editKomodita($id)
    {
        $komoditas = Komoditas::findOrFail($id);
        return view('Komoditas.edit_komoditas',compact('komoditas'));
    }

    public function spnEditKomoditas(Request $request, $id)
    {
       $komoditas                    = Komoditas::findOrFail($id);
       $komoditas->post_by           = $this->getUserID();
       $komoditas->tanaman_id        = $komoditas->tanaman->id;
       $komoditas->masa_tanam        = $request->masa_tanam;
       $komoditas->ph_tanah          = $request->ph_tanah;
       $komoditas->stdr_tinggi_lahan = $request->stdr_tinggi_lahan;
       $komoditas->deskripsi         = $request->deskripsi;
       //return $komoditas;
       $komoditas->save();
       return redirect('/daftar-komoditas')->with(['success' => 'Komoditas Berhasil di update']);
    }

    public function hapusKomoditas($id)
    {
        $komoditas = Komoditas::find($id);
        $komoditas->delete();
        return redirect('/daftar-komoditas')->with(['success' => 'Komoditas berhasil di hapus']);
    }

    //Hama

    public function hamaIndex()
    {
        $hama = hama::all();
        //return $hama;
        return view ('authentication.admin.Hama.index',compact('hama'));
    }

    public function tambahHama()
    {   
        $tanaman = Tanaman::all();
        return view('authentication.admin.Hama.tambah_hama',compact('tanaman'));
    }

    public function spnTambahHama(Request $request)
    {
        $hama             = new Hama;
        $hama->nama_hama  = $request->nama_hama;
        $hama->post_by    = $this->getUserID();
        $hama->ke_tanaman = $request->ke_tanaman;
        $hama->pestisida  = $request->pestisida;
        $hama->penanganan = $request->penanganan;
        //return $hama;
        $hama->save();
        return redirect('/daftar-hama');
    }

    public function detailHama($id)
    {
        $hama = Hama::findOrFail($id);
        //return $hama;
        return view('Hama.detail_hama',compact('hama'));
    }

    public function updateHama($id)
    {
        $hama    = Hama::findOrFail($id);
        $tanaman = Tanaman::all();
        //return $komo;
        return view('Hama.edit_hama',compact('hama','tanaman'));
    }

    public function spnUpdateHama(Request $request, $id)
    {

        $this->validate($request, [
              'ke_tanaman' => 'required'
        ]);

        $hama             = Hama::findOrFail($id);
        $hama->nama_hama  = $request->nama_hama;
        $hama->post_by    = $this->getUserID();
        $hama->ke_tanaman = $request->ke_tanaman;
        $hama->pestisida  = $request->pestisida;
        $hama->penanganan = $request->penanganan;
        //return $hama;
        $hama->save();
        return redirect('/daftar-hama');
    }

    public function deleteHama($id)
    {
        $hama = Hama::findOrFail($id);
        $hama->delete();
        return redirect('/daftar-hama')->with(['success' => 'Berhasil hapus jenis hama']);
    }

    // Lahan
    public function lahanIndex()
    {
        $lahan = lahan::all();
        //return $lahan->petani[0]['id'];
        return view('authentication.admin.Lahan.index',compact('lahan'));
    }

    //Tanaman
    public function tanamanIndex()
    {
        $tanaman = Tanaman::all();
        return view('authentication.admin.Tanaman.index',compact('tanaman'));
    }

    public function simpanTanaman(Request $request)
    {
        $this->validate($request,[
            'nama_tanaman' => 'required'
        ]);
        Tanaman::create($request->all());
        return redirect()->back();
    }
}
