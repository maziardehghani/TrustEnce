<?php

use App\Http\Controllers\Site\ProjectController;
use App\Http\Controllers\Site\ProjectRequestController;
use App\Http\Controllers\Site\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/last-projects/{limit}', [ProjectController::class, 'lastProjects']);

Route::get('/projects/', [ProjectController::class, 'allProjects']);

Route::get('/our-team/', [TeamController::class, 'teams']);


Route::get('/project-request-form/{formPage}', [ProjectRequestController::class, 'projectRequestForm']);
