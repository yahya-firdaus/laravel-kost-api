<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kost extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "kost";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "user_id",
        "title",
        "description",
        "tipe_sewa",
        "tahun_dibangun",
        "catatan_lain",
        "alamat",
        "provinsi",
        "kota",
        "kecamatan",
        "latitude",
        "longitude",
        "catatan_alamat",
        "panjang_kamar",
        "lebar_kamar",
        "total_kamar",
        "kamar_tersedia",
        "harga",
        "minimum_lama_sewa",
        "harga_perhari",
        "harga_perminggu",
        "harga_per3bulan",
        "harga_per6bulan",
        "harga_pertahun",
        "status_biaya_tambahan",
        "deposit",
        "harga_uang_muka",
        "denda_keterlambatan",
        "batas_waktu",
        "batas_waktu_tipe",
        "created_at",
        "created_by",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
