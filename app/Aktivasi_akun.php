<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Petani;
use App\Profil;

class Aktivasi_akun extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
        'lahan_id',
    	'verifed_by',
    	'verifed',
    	'waktu_verifikasi'
    ];

    public function userAktiva(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function profilAktiva(){
    	return $this->belongsTo(Profil::class,'user_id');
    }
    public function petaniAktiva(){
        return $this->belongsTo(Petani::class,'user_id');
    }
}
