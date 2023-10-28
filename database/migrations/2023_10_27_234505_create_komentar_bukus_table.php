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
            Schema::create('komentar_buku', function (Blueprint $table) {
                $table->increments('idkomentar');
                $table->integer('idbuku');
                $table->string('noktp', 20);
                $table->text('komentar');
                $table->timestamps();

                $table->foreign('idbuku')->references('idbuku')->on('buku');
                $table->foreign('noktp')->references('noktp')->on('anggota');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('komentar_buku');
    }
};
