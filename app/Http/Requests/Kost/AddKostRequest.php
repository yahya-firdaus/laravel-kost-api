<?php

namespace App\Http\Requests\Kost;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="AddKostRequest",
 *     title="Add Kost Request",
 *     description="Request structure for storing a new post",
 *     required={"user_id", "title", "description", "tipe_sewa", "tahun_dibangun", "catatan_lain", "alamat", "provinsi", "kota", "kecamatan", "latitude", "longitude", "catatan_alamat", "panjang_kamar", "lebar_kamar", "total_kamar", "kamar_tersedia", "harga", "minimum_lama_sewa", "harga_perhari", "harga_perminggu", "harga_per3bulan", "harga_per6bulan", "harga_pertahun", "status_biaya_tambahan", "deposit", "harga_uang_muka", "denda_keterlambatan", "batas_waktu", "batas_waktu_tipe", "created_at", "created_by"},
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
 *         property="created_by",
 *         type="string",
 *         description=""
 *     )
 * )
 */
class AddKostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'integer',
                'exists:users,id'
            ],
            'title' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'tipe_sewa' => [
                'required',
                'string'
            ],
            'tahun_dibangun' => [
                'required',
                'integer'
            ],
            'catatan_lain' => [
                'string'
            ],
            'alamat' => [
                'required',
                'string'
            ],
            'provinsi' => [
                'required',
                'string'
            ],
            'kota' => [
                'required',
                'string'
            ],
            'kecamatan' => [
                'required',
                'string'
            ],
            'latitude' => [
                'string'
            ],
            'longitude' => [
                'string'
            ],
            'catatan_alamat' => [
                'string'
            ],
            'panjang_kamar' => [
                'required',
                'integer'
            ],
            'lebar_kamar' => [
                'required',
                'integer'
            ],
            'total_kamar' => [
                'required',
                'integer'
            ],
            'kamar_tersedia' => [
                'required',
                'integer'
            ],
            'harga' => [
                'required',
                'integer'
            ],
            'minimum_lama_sewa' => [
                'integer'
            ],
            'harga_perhari' => [
                'integer'
            ],
            'harga_perminggu' => [
                'integer'
            ],
            'harga_per3bulan' => [
                'integer'
            ],
            'harga_per6bulan' => [
                'integer'
            ],
            'harga_pertahun' => [
                'integer'
            ],
            'status_biaya_tambahan' => [
                'required',
                'boolean'
            ],
            'deposit' => [
                'integer'
            ],
            'harga_uang_muka' => [
                'integer'
            ],
            'denda_keterlambatan' => [
                'integer'
            ],
            'batas_waktu' => [
                'integer'
            ],
            'batas_waktu_tipe' => [
                'string'
            ],
            'created_by' => [
                'required',
                'string'
            ]
        ];
    }
}
