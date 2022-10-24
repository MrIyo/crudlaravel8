<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama',
        'jeniskelamin',
        'notelpon',
        'email',
        'id_lokasi',
        'id_kendaraan',
        'plat_nomor',
        'id_paket',
        'harga',
        'kartu_e',
        'f_ktp',
        'f_sim',
        'f_stnk',
        'no_rekening',
        'bukti_transaksi',
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
}
