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
        Schema::create('kost', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title', 250);
            $table->longText('description');
            $table->string('tipe_sewa', 15);
            $table->integer('tahun_dibangun');
            $table->longText('catatan_lain')->nullable();
            $table->longText('alamat');
            $table->string('provinsi', 70);
            $table->string('kota', 70);
            $table->string('kecamatan', 70);
            $table->string('latitude', 35);
            $table->string('longitude', 35);
            $table->longText('catatan_alamat')->nullable();
            $table->integer('panjang_kamar');
            $table->integer('lebar_kamar');
            $table->integer('total_kamar');
            $table->integer('kamar_tersedia');
            $table->bigInteger('harga');
            $table->integer('minimum_lama_sewa')->nullable();
            $table->bigInteger('harga_perhari')->nullable();
            $table->bigInteger('harga_perminggu')->nullable();
            $table->bigInteger('harga_per3bulan')->nullable();
            $table->bigInteger('harga_per6bulan')->nullable();
            $table->bigInteger('harga_pertahun')->nullable();
            $table->boolean('status_biaya_tambahan');
            $table->bigInteger('deposit')->nullable();
            $table->bigInteger('harga_uang_muka')->nullable();
            $table->bigInteger('denda_keterlambatan')->nullable();
            $table->integer('batas_waktu')->nullable();
            $table->string('batas_waktu_tipe', 25)->nullable();
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
        Schema::dropIfExists('kost');
        Schema::table('kost', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
