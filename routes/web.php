<?php


use App\Http\Controllers\Admin\web\MediaController;
use App\Http\Controllers\Admin\web\ProjectController;
use App\Http\Controllers\Admin\web\ProjectRequestController;
use App\Http\Controllers\Admin\web\TeamController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;



Route::middleware([AdminMiddleware::class])->prefix('admin-panel')->group(function () {


    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::get('/projects/show/{project}', [ProjectController::class, 'show'])->name('admin.projects.show');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::put('/projects/update/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::get('/projects/delete/{project}', [ProjectController::class, 'delete'])->name('admin.projects.delete');


    Route::get('/teams', [TeamController::class, 'index'])->name('admin.teams.index');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('admin.teams.create');
    Route::get('/teams/show/{team}', [TeamController::class, 'show'])->name('admin.teams.show');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('admin.teams.store');
    Route::put('/teams/update/{team}', [TeamController::class, 'update'])->name('admin.teams.update');
    Route::get('/teams/delete/{team}', [TeamController::class, 'delete'])->name('admin.teams.delete');


    Route::get('/medias', [MediaController::class, 'index'])->name('admin.medias.index');
    Route::get('/medias/create', [MediaController::class, 'create'])->name('admin.medias.create');
    Route::get('/medias/delete/{team}', [MediaController::class, 'delete'])->name('admin.medias.delete');


    Route::get('/requests', [ProjectRequestController::class, 'index'])->name('admin.requests.index');


});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
