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
        Schema::create('fasilitas_kamar_kost', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->integer('temporary_id');

            $table->foreign('kost_id')->references('id')->on('kost')->onDelete('cascade');
            $table->foreign('temporary_id')->references('id')->on('temporary')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_kamar_kost');
    }
};
