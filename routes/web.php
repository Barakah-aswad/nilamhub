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
	Route::post('/daftar_petani/{id}','PengunjungController@simpanAkunPetani');
	Route::get('/profil-pengunjung','ProfilController@registerProfil');
	Route::post('/profil-pengunjung','ProfilController@simpanProfil');
});

//Admin

Route::group(['middleware' => 'admin'], function(){
	Route::get('/manager', 'AdminController@index');
	Route::get('/daftar-peserta','AdminController@daftarPeserta');

	Route::get('/verifikasi-akun','AdminController@verifikasiAkun');
	Route::get('/aktifasi/{id}','AdminController@showAktifasi');
	Route::put('/aktifasi/{id}','AdminController@storeAktifasi');

	//Route::get('/aktifasi{id}/cencel','AdminController@cencelAktifasi');
	Route::get('/daftar-komoditas','AdminController@komoditasIndex');

	//lahan
	Route::get('/daftar_lahan','AdminController@lahanIndex');

	//Profil
	
});
	
	//Petani
Route::group(['middleware' => 'petani'], function(){
	Route::get('/petani','PetaniController@index');
	Route::get('/profil-petani','ProfilController@index');
	Route::get('/profil-edit','ProfilController@editProfil');
	//Route::post('/profil-petani','ProfilController@simpanProfil');

	Route::get('/daftar-lahan','PetaniController@daftarLahan');
	Route::get('/registrasi-lahan','PetaniController@registrasiLahan');
	Route::post('/registrasi-lahan','PetaniController@simpanLahan');
	//proposal tanam
	Route::get('/proposal-tanam','PetaniController@proposalTanam');
});