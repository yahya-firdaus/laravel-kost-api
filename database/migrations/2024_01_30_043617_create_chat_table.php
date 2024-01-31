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
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->integer('user_id');
            $table->integer('owner_id');
            $table->longText('text');
            $table->dateTime('created_at');
            $table->string('created_by', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat');
        Schema::table('extras', function (Blueprint $table) {
            $table->foreign('kost_id')->references('id')->on('kost');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('owner_id')->references('id')->on('user');
        });
    }
};
