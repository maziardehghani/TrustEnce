<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResources extends JsonResource
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
            'intro' => $this->intro,
            'description' => $this->description,
            'link' => $this->link,
            'is_active' => $this->is_active,
            'banner' => $this->banner,
            'background' => $this->background,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
        ];
    }
}
