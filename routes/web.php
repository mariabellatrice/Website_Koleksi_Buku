<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kategori;

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
    echo "Pengarang:  $data->pengarang . <br>";
    echo "Gnere: $data->genre . <br>";
    echo "Harga: $data->harga . <br><br>";
    }
});
