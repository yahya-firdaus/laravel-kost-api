<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="ChatResource",
 *     title="Chat Resource",
 *     description="Chat Resource",
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
 *         type="string",
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
class ChatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => UserResource::make($this->user),
            'owner' => UserResource::make($this->owner),
            'kost' => KostResource::make($this->kost),
            'text' => $this->text,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ];
    }
}
