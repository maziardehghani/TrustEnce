<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectRequestFormResources;
use App\Models\ProjectRequestForm;

class ProjectRequestController extends Controller
{
    public function projectRequestForm($formPage)
    {
        $projectRequestForm = ProjectRequestForm::query()
            ->whereActive()
            ->whereFormPage($formPage)
            ->get();

        return response()->success(ProjectRequestFormResources::collection($projectRequestForm));
    }


    public function storeProjectRequest()
    {

    }
}
