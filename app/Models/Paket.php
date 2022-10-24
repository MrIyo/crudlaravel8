<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'pakets';
    protected $fileable = [
        'paket_kendaraan',
        'sejak',
        'sampai',
        'harga',
        'create_at',
        'updated_at',
    ];

    protected $appends = ['JangkaWaktu'];

    public function getJangkaWaktuAttribute()
    {
        $formattedSejak = Carbon::parse($this->sejak);
        $formattedSampai = Carbon::parse($this->sampai);
        return $formattedSejak->diffInDays($formattedSampai);
    }
}
