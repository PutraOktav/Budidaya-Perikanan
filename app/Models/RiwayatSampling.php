<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSampling extends Model
{
    use HasFactory;
    // Keterangan dari project Laravel di atas adalah daftar kolom (fields) pada tabel database yang dapat diisi (fillable). 
    // Daftar kolom tersebut terdiri dari nama, area, total ikan, biomassa dalam kg, biomassa panen dalam kg, ukuran awal, waktu panen, nama pakan, ukuran panen, 
    // total pakan, biaya ikan, biaya pakan, total biaya, dan sampling. Dengan daftar kolom yang telah ditentukan, pengguna dapat memasukkan data ke dalam database 
    // dengan mudah dan terstruktur.
    protected $fillable = [
        'name',
        'area',
        'ukuran_ikan_sampling',
        'feedDayKG',
        'totalFeedSampling',
        'sampling',
    ];
}
