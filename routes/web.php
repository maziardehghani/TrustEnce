<?php


use App\Http\Controllers\Admin\web\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/projects', [ProjectController::class, 'index'])->name('projects.index');
