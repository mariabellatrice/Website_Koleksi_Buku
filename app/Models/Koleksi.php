<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    protected $table = 'koleksi';
	protected $primarykey = 'id';
	protected $fillable = ['judul_buku', 'pengarang', 'genre', 'harga', 'gambar'];
}
