<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function semua()
   	 {
        $kategori = koleksii::all();
        foreach ($koleksi as $data) {
            echo $data->gambar . "<br><br>";
            echo  $data->id . ". " . $data->judul_buku . "<br>";
            echo "Pengarang:  $data->pengarang <br>";
            echo "Gnere: $data->genre <br>";
            echo "Harga: $data->harga <br><br>";
       	    }
    }
}
