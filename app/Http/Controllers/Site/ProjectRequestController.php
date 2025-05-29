<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Resources\ProjectRequestFormResources;
use App\Models\ProjectRequest;
use App\Models\ProjectRequestForm;
use App\Models\ProjectRequestValue;
use Illuminate\Http\Request;

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


    public function storeProjectRequest(StoreProjectRequest $request)
    {

        $projectRequest = ProjectRequest::query()->create([
            'email' => $request->input('Email')
        ]);

        foreach ($request->keys() as $key) {
            $input = ProjectRequestForm::query()->whereInput($key)->whereFormPage($request->form_page)->first();

            if (!$input) {
                continue;
            }

            ProjectRequestValue::query()->create([
                'project_request_id' => $projectRequest->id,
                'project_request_form_id' => $input->id,
                'value' => $request->input($key),
            ]);

        }


        return response()->success(null);
    }
}
