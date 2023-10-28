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
            Schema::create('rating_buku', function (Blueprint $table) {
                $table->integer('idbuku');
                $table->string('noktp', 20);
                $table->decimal('skor_rating', 3, 1);
                $table->date('tgl_rating');
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
        Schema::dropIfExists('rating_buku');
    }
};
