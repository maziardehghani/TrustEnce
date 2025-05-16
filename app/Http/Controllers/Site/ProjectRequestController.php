<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectRequestFormResources;
use App\Models\ProjectRequestForm;

class ProjectRequestController extends Controller
{
    public function projectRequestForm()
    {
        $projectRequestForm = ProjectRequestForm::query()->whereActive()->get();

        return response()->success(ProjectRequestFormResources::collection($projectRequestForm));
    }
}
