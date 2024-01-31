<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiResponse;
use App\Models\Kost;
use App\Http\Requests\Kost\AddKostRequest;
use App\Http\Resources\KostResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Kost",
 *     description="Kost endpoints"
 * )
 */
class KostController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/kost",
     *     summary="Get list kost",
     *     description="Returns a list of kost",
     *     tags={"Kost"},
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="Number of kost per page (default is 5)",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             default=5
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Current page (default is 1)",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             default=1
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response: List of kost",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="kost",
     *                     type="array",
     *                     @OA\Items(ref="#/components/schemas/KostResource")
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized: Invalid credentials",
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
     *         description="Forbidden: Insufficient permissions",
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
     *         response=404,
     *         description="Not Found: Kost not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Not Found"
     *             )
     *         )
     *     ),
     *     security={
     *         {"bearerAuth": {}}
     *     }
     * )
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 5);
        $kost = Kost::with("user")->paginate($limit);

        return ApiResponse::success(
            data: [
                'kost' => KostResource::collection($kost)
            ]
        );
    }

    /**
     * @OA\Post(
     *     path="/api/kost",
     *     summary="Tambah data kost",
     *     description="Tambah data kost",
     *     tags={"Kost"},
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
    public function store(AddKostRequest $request)
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
