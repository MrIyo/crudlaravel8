<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'jenis_kendaraan',
        'created_at',
        'updated_at',
    ];
}
