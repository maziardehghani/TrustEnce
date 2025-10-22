<?php

namespace App\Http\Controllers\Admin\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Resources\ProjectResources;
use App\Models\Project;
use App\Services\MediaServices\MediaService;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()->latest()->get();


        $projects = $projects->map(function ($project) {
            return [
                'id' => $project->id,
                'title' => $project->title,
                'intro' => $project->intro,
                'description' => $project->description,
                'link' => $project->link,
                'is_active' => $project->is_active,
                'banner' => $project->banner,
                'background' => $project->background,
                'created_at' => Carbon::parse($project->created_at)->format('Y-m-d'),
            ];
        });


        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function show(Project $project)
    {
        return response()->success(new ProjectResources($project));
    }


    public function store(ProjectStoreRequest $request)
    {
        $project = Project::query()->create($request->all());


        $media = MediaService::uploadIf(
            $request->hasFile('banner'),
            $request->file('banner'),
            'banner',
            'project',
            $project->id,
        );

        return view('admin.projects.create');

    }


    public function update(ProjectStoreRequest $request, Project $project)
    {
        $project->update($request->all());

        return response()->success();
    }


}
