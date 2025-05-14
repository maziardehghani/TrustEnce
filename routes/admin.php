<?php

use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProjectController;
use App\Models\Media;
use Illuminate\Support\Facades\Route;



Route::prefix('projects')->group(function () {

    Route::get('', [ProjectController::class, 'index'])
        ->name('projects.index');


    Route::get('show/{project}', [ProjectController::class, 'show'])
        ->name('projects.show');


    Route::post('store', [ProjectController::class, 'store'])
        ->name('projects.store');


    Route::put('update/{project}', [ProjectController::class, 'update'])
        ->name('projects.update');

});






/////////////////////////Media///////////////////////////
Route::prefix('medias')->group(function () {

    Route::post('/store', [MediaController::class, 'store'])
        ->name('medias.store');


    Route::post('/replace', [MediaController::class, 'replace'])
        ->name('medias.replace');


    Route::delete('/delete/{media}', [MediaController::class, 'delete'])
        ->name('medias.delete');


    Route::get('/download/{media}', [MediaController::class, 'downloadFile'])
        ->name('medias.downloadFile');


});



