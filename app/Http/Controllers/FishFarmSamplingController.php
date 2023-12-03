<?php

namespace App\Http\Controllers;

use App\Models\FishFood;
use App\Models\FishType;
use Illuminate\Http\Request;
use App\Models\RiwayatSampling;
use Illuminate\Support\Facades\Log;

class FishFarmSamplingController extends Controller
{
    // Fungsi index() ini digunakan untuk mengakses halaman indeks (daftar) data jenis ikan pada aplikasi Laravel. Di dalam fungsi ini, 
    // kita mengambil semua data jenis ikan dari model FishType dengan menggunakan method all() dan menyiapkan data tersebut untuk ditampilkan 
    // pada halaman fish-farm-sampling.index dengan menggunakan method view() dan parameter compact('fishTypes'). Dengan menggunakan compact('fishTypes'), 
    // data jenis ikan tersebut akan dikirimkan ke halaman index dan dapat diakses dengan variabel $fishTypes.
    public function index()
    {
        $fishTypes = FishType::all();
        return view('fish-farm-sampling.index', compact('fishTypes'));
    }
    // Ini adalah function Laravel yang bertujuan untuk menghitung jumlah pakan yang dibutuhkan dalam sebuah tambak ikan berdasarkan inputan dari user. 
    // Berikut adalah penjelasan dari masing-masing baris kode:
    // public function calculate(Request $request): Ini adalah deklarasi function dengan nama "calculate" yang memiliki parameter Request $request. 
    // Fungsi ini akan dipanggil ketika user melakukan submit pada form inputan.
    // $fishType = FishType::find($request->fish_type);: Baris ini akan mencari data FishType berdasarkan id yang diinputkan oleh user pada form. 
    // Data FishType ini akan digunakan untuk mencari jenis pakan yang digunakan pada ikan tersebut.
    // $area = $request->area;: Baris ini akan mengambil nilai dari inputan "area" yang diinputkan oleh user pada form.
    // $ukuran_ikan_sampling = $request->ukuran_ikan_sampling;: Baris ini akan mengambil nilai dari inputan "ukuran_ikan_sampling" yang diinputkan oleh user pada form.
    // $feedDay = $area * $fishType->stocking_density * $ukuran_ikan_sampling;: Baris ini akan menghitung jumlah pakan yang dibutuhkan per hari berdasarkan luas tambak, 
    // kepadatan ikan, dan ukuran ikan yang diinputkan oleh user pada form.
    // $feedDayKG = $feedDay / 1000;: Baris ini akan menghitung jumlah pakan yang dibutuhkan per hari dalam satuan kilogram.
    // $feed = FishFood::find($fishType->fish_food_id);: Baris ini akan mencari data FishFood berdasarkan id yang disimpan pada tabel FishType. Data ini akan digunakan 
    // untuk menampilkan jenis pakan yang digunakan pada ikan tersebut di halaman result.
    // return view('fish-farm-sampling.result', compact('fishType', 'area', 'ukuran_ikan_sampling', 'feedDay', 'feedDayKG'));: Baris ini akan menampilkan halaman result 
    // dengan mengirimkan data-data hasil perhitungan pada function ini yaitu $fishType, $area, $ukuran_ikan_sampling, $feedDay, dan $feedDayKG.
    public function calculate(Request $request)
    {
        $fishType = FishType::find($request->fish_type);
        $area = $request->area;
        $ukuran_ikan_sampling = $request->ukuran_ikan_sampling;
        $sampling = $fishType->waktu_sampling;
        $feedDay = $area * $fishType->stocking_density * $ukuran_ikan_sampling;
        $feedDayKG = $feedDay / 1000;
        $totalFeedSampling = $feedDayKG * $sampling * 7;
        $feed = FishFood::find($fishType->fish_food_id);
        $data = [
            'name' => $fishType->name,
            'area' => $area,
            'ukuran_ikan_sampling' => $ukuran_ikan_sampling,
            'feedDayKG' => $feedDayKG,
            'sampling' => $sampling,
            'totalFeedSampling' => $totalFeedSampling,
        ];
        $riwayatSampling = RiwayatSampling::create($data);
        return view('fish-farm-sampling.result', compact('fishType', 'area', 'ukuran_ikan_sampling',
        'feedDay', 'feedDayKG', 'sampling', 'totalFeedSampling'
        ));
    }
}
