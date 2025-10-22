<?php


use App\Http\Controllers\Admin\web\MediaController;
use App\Http\Controllers\Admin\web\ProjectController;
use App\Http\Controllers\Admin\web\ProjectRequestController;
use App\Http\Controllers\Admin\web\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
Route::get('/admin-panel/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
Route::get('/admin-panel/projects/show/{project}', [ProjectController::class, 'show'])->name('admin.projects.show');
Route::post('/admin-panel/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
Route::put('/admin-panel/projects/update/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
Route::get('/admin-panel/projects/delete/{project}', [ProjectController::class, 'delete'])->name('admin.projects.delete');



Route::get('/admin-panel/teams', [TeamController::class, 'index'])->name('admin.teams.index');
Route::get('/admin-panel/teams/create', [TeamController::class, 'create'])->name('admin.teams.create');
Route::get('/admin-panel/teams/show/{team}', [TeamController::class, 'show'])->name('admin.teams.show');
Route::post('/admin-panel/teams/store', [TeamController::class, 'store'])->name('admin.teams.store');
Route::put('/admin-panel/teams/update/{team}', [TeamController::class, 'update'])->name('admin.teams.update');
Route::get('/admin-panel/teams/delete/{team}', [TeamController::class, 'delete'])->name('admin.teams.delete');


Route::get('/admin-panel/medias', [MediaController::class, 'index'])->name('admin.medias.index');
Route::get('/admin-panel/medias/create', [MediaController::class, 'create'])->name('admin.medias.create');
Route::get('/admin-panel/medias/delete/{team}', [MediaController::class, 'delete'])->name('admin.medias.delete');


Route::get('/admin-panel/requests', [ProjectRequestController::class, 'index'])->name('admin.requests.index');
