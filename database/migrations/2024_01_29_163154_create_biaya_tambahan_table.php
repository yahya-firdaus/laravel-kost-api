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
        Schema::create('biaya_tambahan', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->string('nama_biaya', 70);
            $table->integer('total_biaya');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_tambahan');
        Schema::table('biaya_tambahan', function (Blueprint $table) {
            $table->foreign('kost_id')->references('id')->on('kost');
        });
    }
};
