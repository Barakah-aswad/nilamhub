<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Petani;

class Lahan extends Model
{
    protected $fillable = [
    	'user_id',
    	'total_luas',
    	'lat',
    	'log',
    	'alamat_lahan',
    	'no_sertifikat',
    	'status_tanah',
    	'tahun_garap',
    	'jenis_pengaman',
    	'jrk_lahan'
    ];

    public function petani()
    {
        return $this->belongsTo(Petani::class,'user_id');
    }
}
