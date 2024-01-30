<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="KostResource",
 *     title="Kost Resource",
 *     description="Kost Resource",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="The unique identifier of the kost"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="The title of the kost"
 *     ),
 *     @OA\Property(
 *         property="slug",
 *         type="string",
 *         description="The slug of the kost"
 *     ),
 *     @OA\Property(
 *         property="body",
 *         type="string",
 *         description="The body of the kost"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="The timestamp when the kost was created"
 *     ),
 *     @OA\Property(
 *         property="user",
 *         ref="#/components/schemas/AuthorResource"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="The timestamp when the kost was last updated"
 *     ),
 * )
 */
class KostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'user' => AuthorResource::make($this->user),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
