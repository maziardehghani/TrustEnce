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
            'category_name' => $this->category_name,
            'intro' => $this->intro,
            'description' => $this->description,
            'link' => $this->link,
            'is_active' => $this->is_active,
            'banner' => $this->banner,
            'gallery_1' => $this->gallery_1,
            'gallery_2' => $this->gallery_2,
            'gallery_3' => $this->gallery_3,
            'gallery_4' => $this->gallery_4,
            'gallery_5' => $this->gallery_5,
            'gallery_6' => $this->gallery_6,
            'gallery_7' => $this->gallery_7,
            'gallery_8' => $this->gallery_8,
            'gallery_9' => $this->gallery_9,
            'gallery_10' => $this->gallery_10,
            'background' => $this->background,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
        ];
    }
}
