<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="AddChatRequest",
 *     title="Add Chat Request",
 *     description="Request structure for storing a new post",
 *     required={"user_id", "owner_id", "kost_id", "text"},
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="owner_id",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="kost_id",
 *         type="integer",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="text",
 *         type="string",
 *         description=""
 *     ),
 *     @OA\Property(
 *         property="created_at",
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
class AddChatRequest extends FormRequest
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
                'integer'
            ],
            'owner_id' => [
                'required',
                'integer'
            ],
            'kost_id' => [
                'required',
                'integer'
            ],
            'text' => [
                'required',
                'string'
            ],
            'created_at' => [
                'required',
                'string'
            ],
            'created_by' => [
                'required',
                'string'
            ]
        ];
    }
}
