<?php

use Illuminate\Support\Facades\Route;
use App\Models\Koleksi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('koleksi/semua', function () {
    $koleksi = Koleksi::all();
    foreach ($koleksi as $data) {
     echo $data->gambar . "<br><br>";
    echo  $data->id . ". " . $data->judul_buku . "<br>";
    echo "Pengarang:  $data->pengarang <br>";
    echo "Gnere: $data->genre <br>";
    echo "Harga: $data->harga <br><br>";
    }
});

Route::get('koleksi/tambah', function () {
    Koleksi::create([
        'judul_buku' => "Di Tanah Lada",
        'pengarang' => "Ziggy Zezsyazeoviennazabrizkie",
        'genre' => "Fiksi",
        'harga' => '88000',
        'gambar' => 'Di-tanah-lada.jpeg'
    ]);
    echo "<h2><b> Koleksi Telah Berhasil Ditambahkan. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});

Route::get('koleksi/update/{id}', function ($id) {
    koleksi::find($id)->update ([
        'judul_buku' => "Di Tanah Lada",
        'pengarang' => "Ziggy Zezsyazeoviennazabrizkie",
        'genre' => "Fiksi",
        'harga' => '88000',
        'gambar' => 'Di-tanah-lada.jpeg'
    ]);
    echo "<h2><b> Koleksi Telah Berhasil Di-update. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});

Route::get('koleksi/hapus/{id}', function ($id) {
    koleksi::find($id)->delete();
    echo "<h2><b> Koleksi Telah Berhasil Dihapus. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});