<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            'judul_buku' => 'web programming',
            'genre' => 'non-fiksi',
            'pengarang' => 'mini',
        ]);

        DB::table('buku')->insert([
            'judul_buku' => 'matriks',
            'genre' => 'non-fiksi',
            'pengarang' => 'wawa',
        ]);
    }
}
