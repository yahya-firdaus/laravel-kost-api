<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiResponse;
use App\Models\Kost;
use App\Http\Requests\Kost\AddKostRequest;
use App\Http\Requests\Kost\UpdateKostRequest;
use App\Http\Resources\KostResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Show Kost",
 *     description="Show kost for user endpoints"
 * )
 */
class ShowKostController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/showkost/search",
     *     summary="Get list kost by search",
     *     description="Returns a list of kost by search",
     *     tags={"Show Kost"},
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
     * @OA\Get(
     *     path="/api/showkost/{kost}",
     *     summary="Get kost by ID",
     *     description="Retrieves a single kost by its ID",
     *     tags={"Show Kost"},
     *     @OA\Parameter(
     *         name="kost",
     *         in="path",
     *         required=true,
     *         description="ID of the kost to retrieve",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Kost retrieved successfully",
     *         @OA\JsonContent(
     *             type="object",
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
     *         response=404,
     *         description="Kost not found",
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
    public function show(Kost $kost)
    {
        return ApiResponse::success(
            data: [
                'kost' => KostResource::make($kost->load("user"))
            ]
        );
    }
}
