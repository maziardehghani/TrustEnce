<?php

use App\Http\Controllers\Site\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/last-projects/{limit}', [ProjectController::class, 'lastProjects']);

Route::get('/projects/', [ProjectController::class, 'allProjects']);
