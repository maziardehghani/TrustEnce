<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResources;
use App\Models\Project;

class ProjectController extends Controller
{
    public function lastProjects($limit)
    {
        $projects = Project::query()->whereActive()->latest()->limit($limit)->get();

        return response()->success(ProjectResources::collection($projects));
    }

    public function allProjects()
    {
        $projects = Project::query()->whereActive()->latest()->get();

        return response()->success(ProjectResources::collection($projects));
    }

    public function show(Project $project)
    {
        return response()->success(new ProjectResources($project));
    }


}
