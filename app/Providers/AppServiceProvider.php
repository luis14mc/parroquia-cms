<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
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
        // Forzar HTTPS en producción (Railway reverse proxy)
        if (App::isProduction()) {
            URL::forceScheme('https');
        }

        // Previene lazy loading en desarrollo (detecta N+1)
        Model::preventLazyLoading(! App::isProduction());

        // Asegura que las relaciones existan antes de accederlas
        Model::preventAccessingMissingAttributes(! App::isProduction());
    }
}
