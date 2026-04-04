<?php

declare(strict_types=1);

namespace App\Providers;

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
        if (App::isProduction() || str_starts_with((string) config('app.url'), 'https')) {
            URL::forceScheme('https');
        }

        if (App::environment('production') && config('database.default') === 'sqlite') {
            throw new \RuntimeException(
                'En producción no se usa SQLite. En Railway: DB_CONNECTION=mysql y variables MYSQL_URL o MYSQL* del servicio MySQL.'
            );
        }
    }
}
