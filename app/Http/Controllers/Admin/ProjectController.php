<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Resources\ProjectResources;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()->latest()->get();

        return response()->success(ProjectResources::collection($projects));
    }


    public function show(Project $project)
    {
        return response()->success(new ProjectResources($project));
    }


    public function store(ProjectStoreRequest $request)
    {
        $project = Project::query()->create($request->all());

        return response()->success(new ProjectResources($project));
    }


    public function update(ProjectStoreRequest $request, Project $project)
    {
        $project->update($request->all());

        return response()->success();
    }


}
