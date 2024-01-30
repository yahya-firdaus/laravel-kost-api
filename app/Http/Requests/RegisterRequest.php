<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="RegisterRequest",
 *     title="Register Request",
 *     description="Request structure for registering a new user",
 *     required={"name", "email", "password", "tipe", "jenis_properti"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="The name of the user"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         format="email",
 *         description="The email address of the user"
 *     ),
 *     @OA\Property(
 *         property="password",
 *         type="string",
 *         format="password",
 *         description="The password for the user"
 *     ),
 *     @OA\Property(
 *         property="tipe",
 *         type="string",
 *         format="tipe",
 *         description="The tipe for the user"
 *     ),
 *     @OA\Property(
 *         property="jenis_properti",
 *         type="string",
 *         format="jenis_properti",
 *         description="The jenis properti for the user"
 *     )
 * )
 */
class RegisterRequest extends FormRequest
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
            "name" => [
                "required",
                "string",
                "max:255"
            ],
            "email" => [
                "required",
                "email",
                "unique:users,email"
            ],
            "password" => [
                "required",
                "string",
            ],
            "tipe" => [
                "required",
                "string",
            ],
            "jenis_properti" => [
                "string",
            ]
        ];
    }
}
