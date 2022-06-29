<?php

namespace App\Models;

use App\Models\Kendaraan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'jeniskelamin',
        'notelpon',
        'id_kendaraan',
        'plat_nomor',
        'foto',
        'email',
        'password',
    ];

    public function kendaraans(){
        return $this->belongsTo(Kendaraan::class,'id_kendaraan','id'); // di field database admin namanya id_kendaraan itu berelasi dengan field id di tabel kendaraans
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
