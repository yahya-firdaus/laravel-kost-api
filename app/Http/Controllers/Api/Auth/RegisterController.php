<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ApiResponse;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @OA\Tag(
 *     name="Auth",
 *     description="Authentication endpoints"
 * )
 */
class RegisterController extends Controller
{
    /**
     * Register a new user.
     *
     * @OA\Post(
     *     path="/api/auth/register",
     *     summary="Register a new user",
     *     description="Registers a new user and returns a success message.",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/RegisterRequest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="User registered successfully",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="User created successfully"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(
     *                     property="access_token",
     *                     type="string",
     *                     example="your-access-token"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Unprocessable Entity",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 example={"email": {"Invalid credentials"}}
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Unprocessable Entity"
     *             )
     *         )
     *     )
     * )
     */
    public function __invoke(RegisterRequest $request)
    {
        $credit = $request->tipe == "reguler" ? 20 : ($request->tipe == "premium" ? 40 : 0);
        $created_at = date('Y-m-d H:i:s');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->tipe,
            'jenis_properti' => $request->jenis_properti,
            'credit' => $credit,
            'created_at' => $created_at,
            'created_by' => 'System'
        ]);

        $accessToken = $user->createToken('access_token')->plainTextToken;

        return ApiResponse::success(
            message: 'User created successfully',
            data: ['access_token' => $accessToken],
            statusCode: Response::HTTP_CREATED
        );
    }
}
