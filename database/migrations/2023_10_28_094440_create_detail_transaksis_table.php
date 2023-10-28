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
        if (!Schema::hasTable('anggota')) {
            Schema::create('detail_transaksi', function (Blueprint $table) {
                $table->integer('idtransaksi');
                $table->integer('idbuku');
                $table->date('tgl_kembali');
                $table->decimal('denda', 8, 2);
                $table->integer('idpetugas');
                $table->timestamps();

                $table->foreign('idtransaksi')->references('idtransaksi')->on('peminjaman');
                $table->foreign('idbuku')->references('idbuku')->on('buku');
                $table->foreign('idpetugas')->references('idpetugas')->on('petugas');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
