<?php


use App\Http\Controllers\Admin\web\ProjectController;
use App\Http\Controllers\Admin\web\ProjectRequestController;
use App\Http\Controllers\Admin\web\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/projects', [ProjectController::class, 'index'])->name('admin.projects.index');




Route::get('/admin-panel/teams', [TeamController::class, 'index'])->name('admin.teams.index');


Route::get('/admin-panel/requests', [ProjectRequestController::class, 'index'])->name('admin.requests.index');
