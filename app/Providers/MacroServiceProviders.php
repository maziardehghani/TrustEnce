<?php

namespace App\Providers;

use App\Services\ResponseServices\ResponseService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Response::macro('success', function ($data = null, $message = 'data received successfully', $status = 200) {
            return ResponseService::successResponse($data, $message, $status = 200);
        });

        Response::macro('error', function ($message, $status = 400) {
            return ResponseService::errorResponse($message, $status);
        });

        Response::macro('excelResponse', function ($writer) {
            return ResponseService::excelResponse($writer);
        });

        Response::macro('pdfResponse', function ($meta, $fileName) {
            return ResponseService::pdfResponse($meta, $fileName);
        });

    }
}
