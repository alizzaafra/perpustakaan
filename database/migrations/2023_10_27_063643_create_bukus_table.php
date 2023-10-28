<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('buku')) {
            Schema::create('buku', function (Blueprint $table) {
                $table->increments('idbuku');
                $table->string('isbn', 20);
                $table->string('judul', 255);
                $table->integer('idkategori');
                $table->string('pengarang', 100);
                $table->string('penerbit', 100);
                $table->string('kota_terbit', 100);
                $table->string('editor', 100);
                $table->string('file_gambar', 255);
                $table->date('tgl_insert');
                $table->date('tgl_update');
                $table->integer('stok');
                $table->integer('stok_tersedia');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};