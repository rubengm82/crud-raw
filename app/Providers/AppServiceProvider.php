<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

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
        // Auto-creación del fichero database/database.sqlite
        $sqlitePath = database_path('database.sqlite');
        if (!File::exists($sqlitePath)) {
            File::put($sqlitePath, '');
        }
    }
}
