<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishFood extends Model
{
    use HasFactory;

    // protected $fillable adalah properti dari sebuah model di Laravel yang berfungsi untuk menentukan kolom-kolom 
    // apa saja yang bisa diisi atau diubah dengan metode mass assignment. Mass assignment adalah metode pengisian data 
    // ke dalam database dengan mengirimkan data sekaligus dalam bentuk array atau objek.
    // Pada contoh kode di atas, kolom yang bisa diisi atau diubah dengan metode mass assignment adalah name dan price. 
    // Artinya, ketika kita ingin menyimpan atau mengubah data pada model tersebut, kita bisa menggunakan metode create() 
    // atau update() dengan mengirimkan data berupa array atau objek yang berisi nilai untuk kolom name dan price.
    // Namun, perlu diingat bahwa hanya kolom-kolom yang disebutkan di dalam properti $fillable yang akan diisi atau 
    // diubah melalui metode mass assignment. Kolom-kolom lain yang tidak disebutkan akan diabaikan dan tidak akan terisi atau terubah nilainya. 
    // Hal ini merupakan salah satu cara untuk mencegah serangan seperti injection atau manipulasi data yang tidak sah.
    protected $fillable = [
        'name',
        'price'
    ];
    // Method fishTypes() merupakan sebuah method pada sebuah class yang kemungkinan besar merupakan sebuah model dalam aplikasi Laravel.
    // Method ini digunakan untuk menentukan relasi hasMany antara model tersebut dengan model FishType.
    // Relasi hasMany berarti satu instance dari model ini dapat memiliki banyak instance dari model FishType.
    // Relasi ini didasarkan pada foreign key pada tabel yang sesuai, yaitu fish_type_id pada tabel model FishType.
    // Class FishType::class menunjukkan bahwa FishType adalah sebuah class model yang akan di-referensi oleh method ini.
    public function fishTypes()
    {
        return $this->hasMany(FishType::class);
    }
}
