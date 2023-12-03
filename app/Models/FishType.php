<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishType extends Model
{
    use HasFactory;

    // Terdapat model yang memiliki field atau atribut yang dapat diisi atau diubah dengan menggunakan method fillable.
    // Field yang dapat diisi atau diubah tersebut adalah name, price, ukuran_awal, waktu_panen, biomassa, ukuran_panen, stocking_density, fcr, fish_food_id, dan waktu_sampling.
    // Selain itu, terdapat juga sebuah method yang disebut fishFood yang merupakan relasi model dengan model lainnya yaitu FishFood menggunakan metode belongsTo.
    // Dengan menggunakan relasi ini, kita dapat mengakses data FishFood yang berkaitan dengan model tersebut.
    protected $fillable = [
        'name',
        'price',
        'ukuran_awal',
        'waktu_panen',
        'biomassa',
        'ukuran_panen',
        'stocking_density',
        'fcr',
        'fish_food_id',
        'waktu_sampling'
    ];

    // Fungsi ini merupakan bagian dari project Laravel yang berguna untuk menghubungkan model ini dengan model FishFood dengan menggunakan relasi "belongsTo".
    // Artinya, model ini akan memiliki relasi satu arah dimana setiap instance dari model ini akan terhubung dengan satu instance dari model FishFood. Dengan begitu,
    // kita dapat mengakses data dari model FishFood melalui instance dari model ini.
    public function fishFood()
    {
        return $this->belongsTo(FishFood::class);
    }
}
