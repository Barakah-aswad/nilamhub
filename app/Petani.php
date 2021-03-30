<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aktivasi_akun;
use App\User;
use App\Lahan;

class Petani extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
    	'nomor_kk',
    	'nomor_ktp',
    	'alamat_lengkap',
    	'umur',
    	'jml_angg_klg',
    	'agama',
    	'tmp_lahir',
    	'tgl_lahir',
    	'role_id',
    ];

    public function petani(){
        return $this->hasMany(Aktivasi_akun::class);
    }

    public function lahan(){
        return $this->hasMany(Lahan::class);
    }
    
}
