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
        Schema::create('extras', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->integer('temporary_id');
            $table->string('keterangan', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extras');
        Schema::table('extras', function (Blueprint $table) {
            $table->foreign('kost_id')->references('id')->on('kost');
            $table->foreign('temporary_id')->references('id')->on('temporary');
        });
    }
};
