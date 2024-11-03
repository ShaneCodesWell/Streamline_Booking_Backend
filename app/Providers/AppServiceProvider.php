<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CorsMiddleware;
use App\Http\Controllers\UserController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register the CORS middleware
        $this->app['router']->aliasMiddleware('cors', CorsMiddleware::class);

        // Apply the middleware to all API routes
        Route::middleware('cors')->group(function () {
            // Define your API routes here or in routes/api.php
            Route::get('/users', [UserController::class, 'index']);
            Route::get('/users/{id}', [UserController::class, 'show']);
        });
    }
}
