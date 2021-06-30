<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aktivasi_akun;

class Profil extends Model
{
    protected $table = 'profils';

    public function aktiva(){
		return $this->hasOne(Aktivasi_akun::class);
	}
}

