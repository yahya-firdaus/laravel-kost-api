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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('email', 150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 150);
            $table->rememberToken();
            $table->integer('credit');
            $table->string('type', 50);
            $table->string('jenis_properti', 50);
            $table->dateTime('created_at');
            $table->string('created_by', 150);
            $table->dateTime('updated_at')->nullable();
            $table->string('updated_by', 150)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->string('deleted_by', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
