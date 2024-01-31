<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="KostResource",
 *     title="Kost Resource",
 *     description="Kost Resource",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="tipe_sewa",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="tahun_dibangun",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="catatan_lain",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="alamat",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="provinsi",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="kota",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="kecamatan",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="latitude",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="longitude",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="catatan_alamat",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="panjang_kamar",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="lebar_kamar",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="total_kamar",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="kamar_tersedia",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="minimum_lama_sewa",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_perhari",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_perminggu",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_per3bulan",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_per6bulan",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_pertahun",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="status_biaya_tambahan",
 *         type="boolean",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="deposit",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="harga_uang_muka",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="denda_keterlambatan",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="batas_waktu",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="batas_waktu_tipe",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="created_by",
 *         type="string",
 *         description=""
 *     )
 * )
 */
class KostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => UserResource::make($this->user),
            'title' => $this->title,
            'description' => $this->description,
            'tipe_sewa' => $this->tipe_sewa,
            'tahun_dibangun' => $this->tahun_dibangun,
            'catatan_lain' => $this->catatan_lain,
            'alamat' => $this->alamat,
            'provinsi' => $this->provinsi,
            'kota' => $this->kota,
            'kecamatan' => $this->kecamatan,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'catatan_alamat' => $this->catatan_alamat,
            'panjang_kamar' => $this->panjang_kamar,
            'lebar_kamar' => $this->lebar_kamar,
            'total_kamar' => $this->total_kamar,
            'kamar_tersedia' => $this->kamar_tersedia,
            'harga' => $this->harga,
            'minimum_lama_sewa' => $this->minimum_lama_sewa,
            'harga_perhari' => $this->harga_perhari,
            'harga_perminggu' => $this->harga_perminggu,
            'harga_per3bulan' => $this->harga_per3bulan,
            'harga_per6bulan' => $this->harga_per6bulan,
            'harga_pertahun' => $this->harga_pertahun,
            'status_biaya_tambahan' => $this->status_biaya_tambahan,
            'deposit' => $this->deposit,
            'harga_uang_muka' => $this->harga_uang_muka,
            'denda_keterlambatan' => $this->denda_keterlambatan,
            'batas_waktu' => $this->batas_waktu,
            'batas_waktu_tipe' => $this->batas_waktu_tipe,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ];
    }
}
