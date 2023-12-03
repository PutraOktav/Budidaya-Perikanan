<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishType;
use App\Models\FishFood;

class FishTypeController extends Controller
{
    // Fungsi ini merupakan implementasi pada framework Laravel dengan menggunakan bahasa pemrograman PHP. Fungsi ini bernama "index" dan memiliki tipe aksesibilitas "public" yang berarti fungsi ini dapat diakses dari luar class atau file yang sama.
    // Fungsi ini mengambil semua data jenis ikan yang ada menggunakan model "FishType" dan disimpan dalam variabel "$fishTypes". Kemudian, data tersebut akan disajikan pada tampilan yang diatur pada file "fishTypes.index" menggunakan perintah "return view".
    // Dalam framework Laravel, penggunaan "compact('fishTypes')" berfungsi untuk membungkus variabel "$fishTypes" ke dalam array asosiatif dengan key 'fishTypes' sehingga variabel tersebut dapat diakses pada tampilan.
    public function index()
    {
        $fishTypes = FishType::all();

        return view('fishTypes.index', compact('fishTypes'));
    }
    // Fungsi ini adalah untuk membuat data baru pada model FishType dengan menampilkan halaman view 'fishTypes.create'. 
    // Pada fungsi ini juga dilakukan pengambilan semua data dari model FishFood dan dimasukkan ke dalam variabel $fishFoods dengan menggunakan fungsi all(). 
    // Selanjutnya, variabel $fishFoods akan dikirim ke view 'fishTypes.create' dengan menggunakan fungsi compact().
    public function create()
    {
        $fishFoods = FishFood::all();
        return view('fishTypes.create', compact('fishFoods'));
    }
    // Fungsi di atas merupakan function yang terdapat dalam framework Laravel. Fungsi ini memiliki nama "store" dan 
    // menerima parameter request yang merupakan instance dari kelas Request. Fungsi ini bertujuan untuk membuat data 
    // jenis ikan baru di dalam database dengan menggunakan metode HTTP POST.

    // Pada baris pertama di dalam fungsi ini, terdapat kode "$fishType = FishType::create($request->all());" 
    // yang memiliki fungsi untuk membuat data baru pada model FishType dengan menggunakan data yang diterima dari parameter $request. 
    // Kemudian, hasil dari pembuatan data baru tersebut disimpan ke dalam variabel $fishType.

    // Setelah itu, fungsi ini akan melakukan redirect ke halaman tampilan detail jenis ikan yang baru saja dibuat dengan menggunakan kode
    //  "return redirect()->route('fishTypes.show', $fishType->id)->with('success', 'Fish type created successfully.');". 
    //  Dalam kode ini, route yang akan diakses adalah "fishTypes.show" dengan mengirimkan parameter $fishType->id, dan juga menambahkan flash message 
    //  "success" yang berisi informasi bahwa jenis ikan baru telah berhasil dibuat.

    // Secara keseluruhan, fungsi ini digunakan untuk mengelola data jenis ikan pada aplikasi berbasis web yang dibangun dengan menggunakan framework Laravel.
    public function store(Request $request)
    {
        $fishType = FishType::create($request->all());
        return redirect()->route('fishTypes.show', $fishType->id)->with('success', 'Fish type created successfully.');
    }
    // Function ini bernama "show" yang merupakan bagian dari framework Laravel. Fungsi ini menerima satu parameter bernama "$fishType" yang bertipe "FishType", 
    // yang merupakan model dari jenis ikan. Kemudian, function ini akan merender view dengan nama "fishTypes.show" dan membawa data "$fishType" ke dalam view 
    // menggunakan helper function "compact".

    // Dalam hal ini, function "show" digunakan untuk menampilkan halaman detail dari jenis ikan yang dipilih, dengan memanfaatkan data dari model "FishType". 
    // Fungsi ini mempermudah pengembangan aplikasi web dengan memisahkan tugas antara logic bisnis dan tampilan, sehingga memudahkan perawatan dan pengembangan aplikasi.
    public function show(FishType $fishType)
    {
        return view('fishTypes.show', compact('fishType'));
    }
    // Function tersebut merupakan method edit yang terdapat pada sebuah class di framework Laravel. Method ini menerima sebuah parameter yaitu $fishType 
    // yang merupakan instance dari model FishType.

    // Pada method ini, terdapat sebuah variabel $fishFoods yang berisi data yang diambil dari model FishFood menggunakan method all(). Kemudian, data tersebut 
    // akan dikirimkan ke view fishTypes.edit bersama dengan data $fishType menggunakan fungsi compact().

    // Dalam konteks framework Laravel, method edit ini biasanya digunakan untuk menampilkan form untuk mengedit data dari suatu model.
    public function edit(FishType $fishType)
    {
        $fishFoods = FishFood::all();

        return view('fishTypes.edit', compact('fishType', 'fishFoods'));
    }
    // public: menandakan visibility dari method ini, yaitu dapat diakses dari luar class.
    // function: menandakan bahwa ini adalah sebuah method.
    // update: nama dari method yang kita buat.
    // (Request $request, FishType $fishType): parameter yang diterima oleh method ini. $request adalah instance dari class Illuminate\Http\Request 
    // dan $fishType adalah instance dari class App\Models\FishType. Parameter ini digunakan untuk memproses data yang akan diupdate.
    // $request->validate: memvalidasi input dari user sebelum data tersebut diupdate. Laravel akan secara otomatis memvalidasi inputan dan mengembalikan error response bila terdapat kesalahan validasi.
    // 'name' => 'required|max:255', 'price' => 'required|numeric|min:0', 'ukuran_awal' => 'required|numeric|min:0', 'waktu_panen' => 'required|max:255', 'ukuran_panen' => 'required|numeric|min:0', 
    // 'stocking_density' => 'required|numeric|min:0', 'fcr' => 'required|numeric|min:0', 'food_id' => 'required|exists:fish_food,id': keterangan tentang field input dari user dan aturan validasinya.
    // $fishType->update: mengupdate data pada instance FishType dengan input dari user yang valid.
    // 'name' => $request->name, 'price' => $request->price, 'ukuran_awal' => $request->ukuran_awal, 'waktu_panen' => $request->waktu_panen, 'ukuran_panen' => $request->ukuran_panen, 'stocking_density' => 
    // $request->stocking_density, 'fcr' => $request->fcr, 'food_id' => $request->food_id: data input dari user yang valid untuk diupdate.
    // return: mengembalikan hasil dari method ini.
    // redirect(): melakukan redirect ke halaman tertentu setelah data berhasil diupdate.
    // `route('fishTypes.show', $fishType->id
    public function update(Request $request, FishType $fishType)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'ukuran_awal' => 'required|numeric|min:0',
            'waktu_panen' => 'required|max:255',
            'ukuran_panen' => 'required|numeric|min:0',
            'stocking_density' => 'required|numeric|min:0',
            'fcr' => 'required|numeric|min:0',
            'food_id' => 'required|exists:fish_food,id',
            ]);
            $fishType->update([
                'name' => $request->name,
                'price' => $request->price,
                'ukuran_awal' => $request->ukuran_awal,
                'waktu_panen' => $request->waktu_panen,
                'ukuran_panen' => $request->ukuran_panen,
                'stocking_density' => $request->stocking_density,
                'fcr' => $request->fcr,
                'food_id' => $request->food_id,
            ]);

            return redirect()->route('fishTypes.show', $fishType->id)->with('success', 'Fish type updated successfully.');
        }
        // Fungsi di atas adalah untuk menghapus data jenis ikan (FishType) dalam aplikasi menggunakan framework Laravel. 
        // Parameter $fishType dalam fungsi destroy merupakan objek dari kelas FishType yang akan dihapus.

        // Setelah objek berhasil dihapus, pengguna akan diarahkan kembali ke halaman daftar jenis ikan dengan menggunakan fungsi redirect() dan route(). 
        // Selain itu, pesan sukses juga akan ditampilkan melalui metode with().
        public function destroy(FishType $fishType)
        {
            $fishType->delete();

            return redirect()->route('fishTypes.index')->with('success', 'Fish type deleted successfully.');
        }
    }