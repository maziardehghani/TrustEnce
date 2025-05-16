<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->fullName,
            'position' => $this->position,
            'bio' => $this->bio,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'github' => $this->github,
            'profile' => $this->mediaFile,

        ];
    }
}
