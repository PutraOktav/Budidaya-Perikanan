<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishFood;

class FishFoodController extends Controller
{
    // Function di atas merupakan sebuah function dalam framework Laravel yang digunakan untuk menampilkan seluruh data
    // dari tabel fish_foods di database. Fungsi ini menggunakan metode query all() untuk mengambil semua data dari tabel tersebut.
    // Kemudian data tersebut akan dikirimkan ke view yang bernama 'fishFoods.index' melalui parameter compact('fishFoods').
    // Tujuan dari fungsi ini adalah untuk menampilkan seluruh data pada tabel fish_foods ke dalam halaman web.
    public function index()
    {
        $fishFoods = FishFood::all();

        return view('fishFoods.index', compact('fishFoods'));
    }
    // Ini adalah contoh kode dari function Laravel yang disebut "create". Fungsi ini digunakan untuk mengembalikan tampilan ("view") 
    // yang menampilkan formulir untuk membuat data baru dari suatu model tertentu, dalam hal ini model "fishFoods".

    // Dalam function ini, kita menggunakan method "view" yang memanggil tampilan dengan nama "fishFoods.create". 
    // Tampilan ini kemudian akan ditampilkan kepada pengguna melalui browser.

    // Secara keseluruhan, function ini berguna untuk membuat halaman formulir input data baru pada aplikasi web menggunakan Laravel.
    public function create()
    {
        return view('fishFoods.create');
    }
    // Function di atas merupakan bagian dari framework Laravel yang digunakan untuk menyimpan data makanan ikan yang diambil dari permintaan request.

    // Pada baris pertama function, data makanan ikan yang dikirimkan melalui request akan disimpan ke dalam model FishFood menggunakan method create. 
    // Kemudian, pada baris kedua function, akan dilakukan redirect ke halaman index untuk menampilkan data makanan ikan dengan menyertakan pesan notifikasi 'success' 
    // yang menunjukkan bahwa tipe ikan telah berhasil dibuat.

    // Dengan menggunakan framework Laravel, proses penyimpanan data dan notifikasi pada halaman dapat dilakukan dengan mudah dan efektif.
    public function store(Request $request)
    {
        FishFood::create($request->all());
        return redirect()->route('fishFoods.index')->with('success', 'Fish type created successfully.');
    }
    // Fungsi ini bernama "show" dan digunakan dalam framework Laravel. Parameter yang diterima oleh fungsi ini adalah $fishFood yang merupakan sebuah objek dari kelas FishFood.
    // Fungsi ini mengembalikan sebuah tampilan (view) dengan nama "fishFoods.show" dan mem-passing data $fishFood ke tampilan tersebut melalui fungsi compact(). 
    // Dengan menggunakan compact(), variabel $fishFood akan diubah menjadi array yang dapat dipakai di dalam tampilan.
    public function show(FishFood $fishFood)
    {
        return view('fishFoods.show', compact('fishFood'));
    }
    // Fungsi ini bernama "edit" dan merupakan bagian dari framework Laravel. Fungsi ini menerima satu parameter, yaitu objek dari kelas "FishFood". Objek ini digunakan untuk 
    // mengambil data ikan makanan tertentu yang ingin diubah. Fungsi ini mengembalikan tampilan "edit" yang berisi form untuk mengedit data ikan makanan tersebut. Data ikan 
    // makanan tersebut dipilih menggunakan metode "compact" pada variabel "$fishFood" untuk dikirimkan ke tampilan "edit".
    public function edit(FishFood $fishFood)
    {
        return view('fishFoods.edit', compact('fishFood'));
    }
    // Function untuk mengupdate data FishFood dengan Request dari user dan objek FishFood sebagai parameter
    // public function update(Request $request, FishFood $fishFood)
    // {
    // Validasi data yang diterima dari user
    // $request->validate([
    // 'name' => 'required',
    // 'price' => 'required|numeric|min:0',
    // ]);
    // Dalam function ini, parameter pertama adalah objek Request yang digunakan untuk menerima data dari user. 
    // Parameter kedua adalah objek FishFood yang digunakan untuk mengidentifikasi data yang akan diupdate.

    // Validasi dilakukan dengan menggunakan method validate(), dimana data yang diterima dari user akan dicek apakah 
    // sesuai dengan aturan validasi yang telah ditentukan. Jika tidak sesuai, Laravel akan memberikan error message.

    // Selanjutnya, data pada objek FishFood diupdate dengan data yang diterima dari user. Kemudian, redirect dilakukan ke 
    // halaman index dengan pesan sukses, yang bisa ditampilkan pada halaman tersebut.
    public function update(Request $request, FishFood $fishFood)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        $fishFood->name = $request->name;
        $fishFood->price = $request->price;
        $fishFood->save();

        return redirect()->route('fishFoods.index')
            ->with('success', 'Fish Food updated successfully.');
    }
    // Function destroy di atas merupakan fungsi pada framework Laravel yang digunakan untuk menghapus data FishFood dari database. 
    // Parameter $fishFood merupakan instance dari model FishFood yang akan dihapus.

    // Setelah data berhasil dihapus, maka pengguna akan diarahkan ke halaman yang ditentukan melalui fungsi redirect()->route(). Selain itu,
    // akan ditampilkan pesan sukses "Fish Food deleted successfully." pada halaman yang dituju melalui fungsi with().
    public function destroy(FishFood $fishFood)
    {
        $fishFood->delete();

        return redirect()->route('fishFoods.index')
            ->with('success', 'Fish Food deleted successfully.');
    }
}
