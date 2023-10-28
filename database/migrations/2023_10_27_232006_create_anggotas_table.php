<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('anggota')) {
            Schema::create('anggota', function (Blueprint $table) {
                $table->string('noktp', 20)->primary();
                $table->string('nama', 100);
                $table->string('password', 255);
                $table->string('alamat', 255);
                $table->string('kota', 50);
                $table->string('email', 100);
                $table->string('no_telp', 15);
                $table->string('file_ktp', 255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
};
