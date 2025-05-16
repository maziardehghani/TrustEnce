<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectRequestResourcesAdmin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'email' => $this->email,
            'full_name' => $this->fullName,
            'phone_number' => $this->phoneNumber,
            'service' => $this->selectedService,
            'budget_range' => $this->budgetRange,
            'project_brief' => $this->projectBrief,
            'inquiry' => $this->inquiry,
            'terms_conditions' => $this->termsConditions
        ];
    }
}
