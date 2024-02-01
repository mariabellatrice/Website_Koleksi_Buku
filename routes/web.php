<?php

use Illuminate\Support\Facades\Route;
use App\Models\Koleksi;
use App\Http\Controllers\KoleksiController;

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

Route::resource('koleksi', KoleksiController::class);

/*
Route::get('koleksi/tambah', function () {
    Koleksi::create([
        'judul_buku' => "Di Tanah Lada",
        'pengarang' => "Ziggy Zezsyazeoviennazabrizkie",
        'genre' => "Fiksi",
        'harga' => '88000',
        'gambar' => 'Di-tanah-lada.jpg'
    ]);
    echo "<h2><b> Koleksi Telah Berhasil Ditambahkan. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});

Route::get('koleksi/update/{id}', function ($id) {
    koleksi::find($id)->update ([
        'judul_buku' => "Di Tanah Lada",
        'pengarang' => "Ziggy Zezsyazeoviennazabrizkie",
        'genre' => "Fiksi",
        'harga' => '88000',
        'gambar' => 'Di-tanah-lada.jpg'
    ]);
    echo "<h2><b> Koleksi Telah Berhasil Di-update. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});

Route::get('koleksi/hapus/{id}', function ($id) {
    koleksi::find($id)->delete();
    echo "<h2><b> Koleksi Telah Berhasil Dihapus. Silahkan Kembali Ke .../koleksi/semua </b></h2>";
});
*/