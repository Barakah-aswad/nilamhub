<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('base');
});

//Visitor
Route::group(['middleware' => 'visitors'],function(){

	Route::get('/register','RegisterController@create');
	Route::post('/register', 'RegisterController@store');

	Route::get('/login', 'LoginController@index');
	Route::post('/login', 'LoginController@postLogin');

	Route::get('/lupa-password','ForgetPasswordController@index');
	Route::post('/lupa-password','ForgetPasswordController@store');

	Route::get('/reset/{email}/{reset_code}','ForgetPasswordController@resetPassword');
	Route::post('/reset/{email}/{reset_code}','ForgetPasswordController@postResetPassword');
	
	
});

Route::get('/activate/{email}/{code}', 'AktifasiController@aktifasi');	
Route::get('/reset/{email}/{code}', 'AktifasiController@aktifasi');
Route::post('/logout','LoginController@logout');


//Pengunjung
Route::group(['middleware' => 'pengunjung'], function(){
	
	Route::get('/visitor','PengunjungController@index');
	Route::get('/daftar-petani', 'PengunjungController@buatAkunPetani');
	Route::post('/simpan_daftar_petani','PengunjungController@simpanAkunPetani');

	Route::get('/profil_index','ProfilController@index');
	Route::get('/profil-pengunjung','ProfilController@registerProfil');
	Route::post('/profil-pengunjung','ProfilController@simpanProfil');
	Route::get('/profil_edit_pengunjung/{id}/edit','ProfilController@editProfil');
	Route::put('/profil_edit_pengunjung/{id}/edit','ProfilController@simeditProfil');
});

//Admin

Route::group(['middleware' => 'admin'], function(){
	Route::get('/manager', 'AdminController@index');
	Route::get('/daftar-peserta','AdminController@daftarPeserta');

	Route::get('/verifikasi-akun','AdminController@verifikasiAkun');
	Route::get('/aktifasi/{id}','AdminController@showAktifasi');
	Route::put('/aktifasi/{id}','AdminController@storeAktifasi');

	//Route::get('/aktifasi{id}/cencel','AdminController@cencelAktifasi');
	//Komoditas
	Route::get('/daftar-komoditas','AdminController@komoditasIndex');
	Route::get('/tambah-komoditas','AdminController@tambahKomoditas');
	Route::post('/tambah-komoditas','AdminController@simpanKomoditas');
	Route::get('/komoditas-detail/{id}','AdminController@detailKomoditas');
	Route::get('/edit-komoditas/{id}','AdminController@editKomodita');
	Route::put('/simpan-edit-komoditas/{id}','AdminController@spnEditKomoditas');
	Route::post('/komoditas-delete/{id}','AdminController@hapusKomoditas');

	//Hama dan penyakit
	Route::get('/daftar-hama','AdminController@hamaIndex');
	Route::get('/tambah-hama','AdminController@tambahHama');
	Route::post('/tambah-hama','AdminController@spnTambahHama');
	Route::get('/hama-detail/{id}','AdminController@detailHama');
	Route::get('/edit-hama/{id}','AdminController@updateHama');
	Route::put('/edit-hama/{id}','AdminController@spnUpdateHama');
	Route::post('/delete-hama/{id}','AdminController@deleteHama');

	Route::get('/daftar-penyakit','PenyakitController@index');
	Route::get('/tambah-penyakit','PenyakitController@tambahPenyakit');
	Route::post('/tambahpenyakit','PenyakitController@simpanPenyakit');
	Route::get('/penyakit-detail/{id}','PenyakitController@detailPenyakit');
	Route::get('/edit-penyakit/{id}','PenyakitController@editPenyakit');
	Route::put('/edit-penyakit/{id}','PenyakitController@simpanEditPenyakit');
	Route::post('/penyakit-delete/{id}','PenyakitController@hapusPenyakit');

	//Harga
	Route::get('/tambah-harga','HargaController@tambahHarga');
	Route::get('/harga','HargaController@hargaIndex');
	Route::post('/tambah-harga','HargaController@simpanHarga');
	//Route::get('/edit-harga/{id}','HargaController@hargaIndex');
	Route::put('/edit-harga','HargaController@spneditHarga');
	//lahan
	Route::get('/daftar_lahan','AdminController@lahanIndex');

	//Profil
	
	//Tanaman
	Route::get('/tanaman-index','AdminController@tanamanIndex');
	Route::post('/tambah-tanaman','AdminController@simpanTanaman');
	
});
	
	//Petani
Route::group(['middleware' => 'petani'], function(){
	Route::get('/petani','PetaniController@index');
	Route::get('/profil-petani','ProfilController@index');
	Route::get('/profil_edit_petani/{id}/edit','ProfilController@editProfil');
	Route::put('/profil_edit_petani/{id}/edit','ProfilController@simeditProfil');
	//Route::post('/profil-petani','ProfilController@simpanProfil');

	Route::get('/daftar-lahan','PetaniController@daftarLahan');
	Route::get('/registrasi_lahan','PetaniController@registrasiLahan');
	Route::post('/registrasi_lahan','PetaniController@simpanLahan');
	//proposal tanam
	Route::get('/proposal-tanam','PetaniController@proposalTanam');
});