<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Petani;
class Aktivasi_akun extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
    	'verifed_by',
    	'verifed',
    	'waktu_verifikasi'
    ];

    public function userAktiva(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function petaniAktiva(){
    	return $this->belongsTo(Petani::class,'user_id');
    }
}
