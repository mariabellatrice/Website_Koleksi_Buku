<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KoleksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('koleksi')->insert([
            'judul_buku' => "Laut Bercerita",
            'pengarang' => "Leila S. Chudori",
            'genre' => "Fiksi",
            'harga' => '109000',
            'gambar' => 'Laut-bercerita.jpg'
        ]);

        DB::table('koleksi')->insert([
            'judul_buku' => "Negeri Para Bedebah",
            'pengarang' => "Tere Liye",
            'genre' => "Fiksi",
            'harga' => '99000',
            'gambar' => 'Negeri-para-bedebah.jpg'
        ]);
    }
}
