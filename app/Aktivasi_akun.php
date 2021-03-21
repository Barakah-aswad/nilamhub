<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktivasi_akun extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
    	'verifed_by',
    	'verifed',
    	'waktu_verifikasi'
    ];
}
