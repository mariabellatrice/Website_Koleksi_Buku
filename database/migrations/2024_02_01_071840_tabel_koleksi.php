<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('koleksi', function(Blueprint $table) {
            $table-> id();
            $table->string('judul_buku', 100);
            $table->string('pengarang', 100);
            $table->string('genre', 50);
            $table->decimal("harga", 6, 3);
            $table->text('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist(('koleksi'));
    }
};
