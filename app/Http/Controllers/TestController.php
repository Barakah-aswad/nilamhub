<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function petani (){


        // namespace App\Http\Controllers;

        // use Illuminate\Http\Request;
        // use Sentinel;
        // use App\Petani;
        // use App\Aktivasi_akun;
        // use Carbon;

        // class PengunjungController extends Controller
        // {
        //     public function index(){
        //         return view('Pengunjung.pengunjung');
        //     }   

        //     public function buatAkunPetani(){
        //         return view('authentication.daftar_akun_petani.register_akun_petani');
        //     }

        //     public function getUserId(){

        //         return $user_id = Sentinel::getUser()->id;
        //     }

        //     public function getUserRole(){
        //         return $role_id = Sentinel::getUser()->roles()->id = 3;
        //     }

        //     public function simpanAkunPetani(Request $request){


        //         $this->validate($request,[
        //             'nomor_kk'  => 'required|unique:petanis|integer|min:5',
        //             'nomor_ktp' => 'required|unique:petanis|integer|min:5',
        //             'umur'      => 'required|integer|min:2',
        //             'tgl_lahir' => 'required|integer|min:8',
        //             'alamat_lengkap' => 'required',
        //             'jml_angg_klg' => 'required|integer',
        //             'tempat_lahir' => 'required'
        //         ]);

        //         $dlt_role = Sentinel::findById($this->getUserId());
        //         $rol_dlt  = Sentinel::findRoleBySlug('pengunjung');

        //         $petani = new petani;
        //         $petani->user_id = $this->getUserId();
        //         $petani->nomor_kk = $request->nomor_kk;
        //         $petani->nomor_ktp = $request->nomor_ktp;
        //         $petani->alamat_lengkap = $request->alamat_lengkap;
        //         $petani->umur = $request->umur;
        //         $petani->jml_angg_klg = $request->jml_angg_klg;
        //         $petani->agama = $request->agama;
        //         $petani->tmp_lahir = $request->tempat_lahir;
        //         $petani->tgl_lahir = $request->tgl_lahir;
        //         $petani->role_id = $this->getUserRole();
        //         //return $petani;

        //         $aktiva = new aktivasi_akun;
        //         $aktiva->user_id = $this->getUserId();
        //         $aktiva->petani_id = $petani->user_id;

        //         $nw_role1 = Sentinel::findById($this->getUserId());
        //         $nw_role = Sentinel::findRoleBySlug('petani');

        //         //return $aktiva;
        //         $rol_dlt->users()->detach($dlt_role);
        //         $petani->save();
        //         $aktiva->save();
        //         $nw_role->users()->attach($this->getUserId());
                

                
        //         Sentinel::logout(null, true);
        //         return redirect('/login')->with(['succsess' => 'Anda di alihkan untuk login ulang']);
        //     }

        //     protected function expires() : Carbon
        //     {
        //         return Carbon::now()->subSecond($this->expires);
        //     }

        //     }

    }
}
