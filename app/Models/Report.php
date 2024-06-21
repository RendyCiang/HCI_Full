<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'klasifikasi',
        'tipe',
        'kategori',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'pengaduan',
        'urgensi',
        'bukti',
    ];
}
