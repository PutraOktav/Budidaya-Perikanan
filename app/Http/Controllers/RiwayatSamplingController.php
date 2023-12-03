<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatSampling;
use Illuminate\Support\Facades\Log;


class RiwayatSamplingController extends Controller
{
    // Fungsi index pada project Laravel di atas digunakan untuk menampilkan data riwayat (history) yang telah tersimpan dalam database. 
    // Data tersebut diambil dengan menggunakan model Riwayat yang telah dibuat sebelumnya. Kemudian, data tersebut akan dikirimkan ke view bernama 
    // 'riwayats.index' untuk ditampilkan kepada pengguna. Pada baris terakhir, data riwayat yang telah diterima dikompakkan (compact) dan dikirimkan
    // ke view sebagai variabel $riwayats.
    public function index()
    {
        $riwayats = RiwayatSampling::all();

        return view('riwayat-samplings.index', compact('riwayats'));
    }
    // public function menunjukkan bahwa method show() dapat diakses dari luar kelas.

    // show(Riwayat $riwayat) adalah parameter yang diterima oleh method show(). Parameter ini bertipe data Riwayat dan bernama variabel $riwayat.

    // return view('riwayats.show', compact('riwayat')); menunjukkan bahwa method show() akan mengembalikan sebuah view dengan nama riwayats.show dan mengirimkan data $riwayat ke view tersebut.

    // compact('riwayat') adalah fungsi PHP yang digunakan untuk mengonversi variabel $riwayat menjadi array dengan nama key yang sama (riwayat) sehingga data tersebut bisa dikirimkan ke view.
    public function show( RiwayatSampling $riwayat )
    {
        return view('riwayat-samplings.show', compact('riwayat'));
    }
    // Fungsi destroy digunakan untuk menghapus data riwayat.
    // Parameter $riwayat dijadikan acuan untuk menghapus data riwayat tersebut.
    // Setelah data riwayat berhasil dihapus, pengguna akan diarahkan ke halaman index riwayat.
    // Pada halaman tersebut, pesan 'Riwayat deleted successfully.' akan ditampilkan sebagai notifikasi keberhasilan penghapusan data.
    public function destroy(RiwayatSampling $riwayat)
    {
        $riwayat->delete();

        return redirect()->route('riwayat-samplings.index')->with('success', 'Riwayat deleted successfully.');
    }
}
