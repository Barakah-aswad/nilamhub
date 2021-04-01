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
    	'rating'
    ];

    public function petani(){
        return $this->hasMany(Aktivasi_akun::class);
    }

    public function lahan(){
        return $this->hasMany(Lahan::class);
    }
    
}
