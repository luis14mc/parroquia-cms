<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Sitio estático: evita que variables MYSQL_* antiguas en Railway/XAMPP apunten a un servidor que no usamos.
        config()->set('database.default', 'sqlite');
        config()->set('database.connections.sqlite.database', env('DB_DATABASE', ':memory:'));
    }

    public function boot(): void
    {
        if (App::isProduction() || str_starts_with((string) config('app.url'), 'https')) {
            URL::forceScheme('https');
        }
    }
}
