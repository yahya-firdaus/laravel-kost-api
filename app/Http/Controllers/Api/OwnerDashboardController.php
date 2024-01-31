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
 *     name="Owner Dashboard",
 *     description="Owner dashboard endpoints"
 * )
 */
class OwnerDashboardController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/owner-dashboard",
     *     summary="Get owner dashboard",
     *     description="Show data for dashboard",
     *     tags={"Owner Dashboard"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response: Data for owner dashboard",
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
     *         description="Not Found: Data not found",
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
    public function index()
    {
        $kost = Kost::with("user");

        return ApiResponse::success(
            data: [
                'kost' => KostResource::collection($kost)
            ]
        );
    }
}
