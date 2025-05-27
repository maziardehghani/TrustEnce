<?php

use App\Http\Controllers\Site\ProjectController;
use App\Http\Controllers\Site\ProjectRequestController;
use App\Http\Controllers\Site\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/last-projects/{limit}', [ProjectController::class, 'lastProjects']);

Route::get('/projects/', [ProjectController::class, 'allProjects']);

Route::get('/projects/{project}', [ProjectController::class, 'show']);

Route::get('/our-team/', [TeamController::class, 'teams']);


Route::get('/project-request-form/{formPage}', [ProjectRequestController::class, 'projectRequestForm']);
Route::post('/project-request', [ProjectRequestController::class, 'storeProjectRequest']);



Route::get('samanTest', function () {


    $plainText = "0|0072363808|01829465|";

    $key = base64_decode("M3M2djl5JEImRSlIQE1jUQ==");
    $iv  = base64_decode("WHAyczV2OHkvQj9FKEcrSw==");

    $encrypted = openssl_encrypt(
        $plainText,
        'AES-128-CBC',
        $key,
        OPENSSL_RAW_DATA,
        $iv
    );

    $encoded = base64_encode($encrypted);

    return $encoded;

});
