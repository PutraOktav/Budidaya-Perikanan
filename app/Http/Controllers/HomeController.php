<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\FishFood;
use App\Models\FishType;
use Illuminate\Http\Request;
use App\Models\RiwayatSampling;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
// Function index() adalah sebuah method pada controller yang digunakan untuk menampilkan halaman home pada website.
// $fishTypeCount dan $fishFoodCount adalah dua variabel yang digunakan untuk menyimpan jumlah data pada tabel FishType dan FishFood.
// FishType::count() dan FishFood::count() digunakan untuk menghitung jumlah data pada tabel FishType dan FishFood dengan 
// menggunakan model FishType dan FishFood.
// return view('home', compact('fishTypeCount', 'fishFoodCount')); digunakan untuk menampilkan halaman home dengan memasukkan nilai 
// variabel $fishTypeCount dan $fishFoodCount pada halaman tersebut.
public function index()
{
    $fishTypeCount = FishType::count();
    $fishFoodCount = FishFood::count();
    $riwayats = Riwayat::latest()->take(5)->get();
    $riwayatSamplings = RiwayatSampling::latest()->take(5)->get();
    $riwayatCount = Riwayat::count();
    $riwayatSamplingCount = RiwayatSampling::count();

    return view('home', compact('fishTypeCount', 'fishFoodCount', 'riwayats', 'riwayatSamplings', 'riwayatCount', 'riwayatSamplingCount'));
}

}


