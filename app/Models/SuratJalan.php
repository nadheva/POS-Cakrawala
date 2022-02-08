<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratJalan extends Model
{
    use HasFactory;
    protected $table = 'surat_jalan';
    protected $fillable = [
       'no', 'tanggal', 'nama_penerima','alamat_penerima','nomor_hp','produk'
    ];

    protected $primaryKey = 'id';

    protected $casts = [
        'produk' => 'array',
    ];
}
