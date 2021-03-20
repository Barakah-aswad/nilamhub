<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
