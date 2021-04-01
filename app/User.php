<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Notifications\Notifiable;
use App\Petani;
use App\Aktivasi_akun;
use App\Profil;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'last_name',
        'first_name',
        'permissions'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function byEmail($email){
        return static::whereEmail($email)->first();
    }

    public function petani(){

        return $this->hasOne(Petani::class,'user_id');
    }

    public function Aktivasi_akun(){
        return $this->hasMany(Aktivasi_akun::class);
    }

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }
}
