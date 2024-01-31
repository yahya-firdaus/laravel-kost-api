<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiResponse;
use App\Models\Chat;
use App\Http\Requests\AddChatRequest;
use App\Http\Resources\ChatResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @OA\Tag(
 *     name="Chat",
 *     description="Chat endpoints"
 * )
 */
class ChatController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/chat",
     *     summary="Get list chat by kost id",
     *     description="Returns a list of chat by kost id",
     *     tags={"Chat"},
     *     @OA\Parameter(
     *         name="user_id",
     *         in="query",
     *         description="User Id",
     *         required=false,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="owner_id",
     *         in="query",
     *         description="Owner Id",
     *         required=false,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="kost_id",
     *         in="query",
     *         description="Kost Id",
     *         required=false,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response: List of chat kost",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="chat",
     *                     type="array",
     *                     @OA\Items(ref="#/components/schemas/ChatResource")
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
     *         description="Not Found: Chat not found",
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
        $chat = Chat::with("user")->paginate($limit);

        return ApiResponse::success(
            data: [
                'chat' => ChatResource::collection($chat)
            ]
        );
    }

    /**
     * @OA\Post(
     *     path="/api/chat",
     *     summary="Chat dengan owner",
     *     description="Chat dengan owner",
     *     tags={"Chat"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/AddChatRequest")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Chat created successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Chat created successfully"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="chat",
     *                     ref="#/components/schemas/ChatResource"
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
     *                     "owner_id": {
     *                         "The owner id field is required."
     *                     },
     *                     "kost_id": {
     *                         "The kost id field is required."
     *                     },
     *                     "text": {
     *                         "The text field is required."
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
    public function store(AddChatRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $chat = Chat::create($validatedData);

            return ApiResponse::success(
                message: 'Chat created successfully',
                data: [
                    "chat" => ChatResource::make($chat->load('user'))
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
