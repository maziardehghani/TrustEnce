<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectRequestFormResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "input" => $this->input,
            "input_type" => $this->input_type,
            "options" => $this->optionsValues,
            "is_active" => $this->is_active,
        ];
    }
}
