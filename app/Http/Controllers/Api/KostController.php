<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiResponse;
use App\Models\Post;
use App\Http\Requests\Kost\AddKostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Kosts",
 *     description="Kost endpoints"
 * )
 */
class KostController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/kost",
     *     summary="Tambah data kost",
     *     description="Tambah data kost",
     *     tags={"Kosts"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/AddKostRequest")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Kost created successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Kost created successfully"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="kost",
     *                     ref="#/components/schemas/KostResource"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Unauthorized"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Forbidden",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Forbidden"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Validation error"
     *             ),
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 description="Validation error details",
     *                 example={
     *                     "user_id": {
     *                         "The user id field is required."
     *                     },
     *                     "title": {
     *                         "The title field is required."
     *                     },
     *                     "description": {
     *                         "The description field is required."
     *                     },
     *                     "tipe_sewa": {
     *                         "The tipe sewa field is required."
     *                     },
     *                     "tahun_dibangun": {
     *                         "The tahun dibangun field is required."
     *                     },
     *                     "alamat": {
     *                         "The alamat field is required."
     *                     },
     *                     "provinsi": {
     *                         "The provinsi field is required."
     *                     },
     *                     "kota": {
     *                         "The kota field is required."
     *                     },
     *                     "kecamatan": {
     *                         "The kecamatan field is required."
     *                     },
     *                     "panjang_kamar": {
     *                         "The panjang kamar field is required."
     *                     },
     *                     "lebar_kamar": {
     *                         "The lebar kamar field is required."
     *                     },
     *                     "total_kamar": {
     *                         "The total kamar field is required."
     *                     },
     *                     "kamar_tersedia": {
     *                         "The kamar tersedia field is required."
     *                     },
     *                     "harga": {
     *                         "The harga field is required."
     *                     },
     *                     "status_biaya_tambahan": {
     *                         "The status biaya tambahan field is required."
     *                     },
     *                     "created_at": {
     *                         "The created at field is required."
     *                     },
     *                     "created_by": {
     *                         "The created by field is required."
     *                     }
     *                 }
     *             )
     *         )
     *     ),
     *     security={
     *         {"bearerAuth": {}}
     *     }
     * )
     */
    public function addkost(AddKostRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $kost = Kost::create($validatedData);

            return ApiResponse::success(
                message: 'Kost created successfully',
                data: [
                    "kost" => KostResource::make($kost->load('user'))
                ],
                statusCode: Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return ApiResponse::error(
                message: "Failed to create kost: {$e->getMessage()}",
                statusCode: Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
