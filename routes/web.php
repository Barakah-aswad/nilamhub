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
    return view('welcome');
});

//Route::get('/register','RegisterController@index');
Route::get('/register','RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@postLogin');

Route::get('/activate/{email}/{code}', 'AktifasiController@aktifasi');
Route::post('/logout','LoginController@logout');



Route::get('/lupa-password','ForgetPasswordController@index');
Route::post('/lupa-password','ForgetPasswordController@store');

Route::get('/reset/{email}/{reset_code}','ForgetPasswordController@resetPassword');
Route::post('/reset/{email}/{reset_code}','ForgetPasswordController@postResetPassword');






Route::get('/visitor','PengunjungController@index');

Route::get('/admin', 'AdminController@index');