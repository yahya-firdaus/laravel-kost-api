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
        Schema::create('ketersediaan_kamar', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->string('nama_kamar', 70);
            $table->integer('lantai');
            $table->boolean('kamar_terisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_kamar');
        Schema::table('ketersediaan_kamar', function (Blueprint $table) {
            $table->foreign('kost_id')->references('id')->on('kost');
        });
    }
};
