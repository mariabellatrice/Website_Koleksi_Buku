<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    public $table = 'Buku';
    protected $fillable = [
        'judul_buku',
        'genre',
        'pengarang',
    ];
}
