<?php

namespace App\Http\Controllers;

use App\Models\FishFood;
use App\Models\FishType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Riwayat;

class FishFarmController extends Controller
{
     // Fungsi ini adalah untuk menampilkan halaman index pada aplikasi fish farm yang menggunakan framework Laravel. 
    // Pada halaman tersebut, data jenis ikan yang ada di kolam ikan akan ditampilkan. Data jenis ikan diambil dari database 
    // melalui model FishType menggunakan metode all(). Kemudian data jenis ikan akan dikirimkan ke halaman view 'fish-farm.index' dengan menggunakan metode compact(). 
    // Halaman view tersebut akan menampilkan data jenis ikan pada tampilan user.

    public function index()
    {
        $fishTypes = FishType::all();
        $fishTypesUpdated = FishType::latest()->value('updated_at');
        $fishFoodUpdated = FishFood::latest()->value('updated_at');

        return view('fish-farm.index', compact('fishTypes', 'fishTypesUpdated', 'fishFoodUpdated'));
    }

    // ...

    public function calculate(Request $request)
    {
         // Fungsi dari project Laravel di atas adalah untuk menghitung biaya dan produksi dari budidaya ikan. 
    // Fungsi ini terdiri dari beberapa langkah, yaitu mengambil jenis ikan dari database, menghitung total 
    // ikan yang dapat diproduksi berdasarkan luas lahan yang tersedia dan kepadatan bibit ikan, menghitung biaya pakan yang dibutuhkan, 
    // menghitung biaya perolehan bibit ikan, menghitung biaya keseluruhan, dan menyimpan hasil perhitungan ke dalam database. Selain itu, hasil 
    // perhitungan juga ditampilkan pada halaman web dengan menggunakan view yang telah dibuat sebelumnya. Proses ini dilakukan untuk membantu 
    // para petani ikan dalam menghitung produksi dan biaya yang diperlukan dalam usaha budidaya ikan mereka.
    $fishType = FishType::find($request->fish_type);
    $area = $request->area;
    $totalFish = $area * $fishType->stocking_density;
    $feedRatio = $fishType->fcr;
    $biomassaPanen = $fishType->ukuran_panen * $totalFish * $feedRatio;
    $biomassaPanenkg = $biomassaPanen / 1000;
    $totalFeed = $biomassaPanen / 1000 * $feedRatio;
    $zak = $totalFeed / 30;
    $biomassaPanen = $fishType->ukuran_panen * $totalFish * $feedRatio;
    $waktuPanen = $fishType->waktu_panen;
    $ukuranAwal = $fishType->ukuran_awal;
    $biomassa = $ukuranAwal * $totalFish;
    $feedDay = $biomassa * 0.03 /1000;
    $ukuranPanen = $fishType->ukuran_panen;
    $biomassakg = $biomassa / 1000;
    $feed = FishFood::find($fishType->fish_food_id);
    $namaPakan = $feed->name;
    $feedCost = $totalFeed * $feed->price;
    $fishCost = $totalFish * $fishType->price;
    $allCost = $feedCost + $fishCost;
    $sampling = $fishType->waktu_sampling;
        $data = [
            'name' => $fishType->name,
            'area' => $area,
            'totalFish' => $totalFish,
            'biomassakg' => $biomassakg,
            'biomassaPanenkg' => $biomassaPanenkg,
            'ukuranAwal' => $ukuranAwal,
            'waktuPanen' => $waktuPanen,
            'namaPakan' => $namaPakan,
            'ukuranPanen' => $ukuranPanen,
            'totalFeed' => $totalFeed,
            'fishCost' => $fishCost,
            'feedCost' => $feedCost,
            'allCost' => $allCost,
            'sampling' => $sampling
        ];
        $riwayat = Riwayat::create($data);

        // ...

        return view('fish-farm.result', compact('fishType', 'area', 'totalFish', 'ukuranAwal', 'totalFeed',
            'feedDay', 'feedCost', 'fishCost', 'waktuPanen', 'allCost', 'biomassa', 'biomassakg', 'zak',
            'namaPakan', 'ukuranPanen', 'biomassaPanen', 'biomassaPanenkg', 'sampling'));
    }
}
