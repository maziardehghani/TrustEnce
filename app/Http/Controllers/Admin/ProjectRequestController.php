<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectRequestResourcesAdmin;
use App\Models\ProjectRequest;

class ProjectRequestController extends Controller
{
    public function index()
    {
        $project_requests = ProjectRequest::query()->latest()->get();

        return response()->success(ProjectRequestResourcesAdmin::collection($project_requests));
    }
}
