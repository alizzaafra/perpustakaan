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
            Schema::create('peminjaman', function (Blueprint $table) {
                $table->increments('idtransaksi');
                $table->string('noktp', 20);
                $table->date('tgl_pinjam');
                $table->integer('idpetugas');
                $table->timestamps();

                $table->foreign('noktp')->references('noktp')->on('anggota');
                $table->foreign('idpetugas')->references('idpetugas')->on('petugas');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
