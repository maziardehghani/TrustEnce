<?php

namespace App\Http\Controllers\Admin\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectRequestResourcesAdmin;
use App\Models\ProjectRequest;

class ProjectRequestController extends Controller
{
    public function index()
    {
        $project_requests = ProjectRequest::query()->latest()->get();

        $project_requests = $project_requests->map(function ($project_request) {
            return [
                'email' => $project_request->email,
                'fullName' => $project_request->fullName,
                'phoneNumber' => $project_request->phoneNumber,
                'service' => $project_request->selectedService,
                'budgetRange' => $project_request->budgetRange,
                'projectBrief' => $project_request->projectBrief,
                'inquiry' => $project_request->inquiry,
                'termsConditions' => $project_request->termsConditions
            ];
        });

        return view('admin.projectRequests.index', compact('project_requests'));
    }
}
