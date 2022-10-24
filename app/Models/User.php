<?php

namespace App\Models;


use App\Models\Paket;
use App\Models\Lokasi;
use App\Models\Kendaraan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'jeniskelamin',
        'notelpon',
        'email',
        'password',
    ];


    public function kendaraans(){
        return $this->belongsTo(Kendaraan::class,'id_kendaraan','id'); // di field database admin namanya id_kendaraan itu berelasi dengan field id di tabel kendaraans
    }
    public function pakets(){
        return $this->belongsTo(Paket::class,'id_paket','id');
    }
    public function lokasis(){
        return $this->belongsTo(Lokasi::class,'id_lokasi','id'); // di field database admin namanya id_kendaraan itu berelasi dengan field id di tabel kendaraans
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
