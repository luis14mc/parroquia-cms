<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\SiteFormSubmission;
use App\Observers\SiteFormSubmissionObserver;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\RateLimiter;
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
        SiteFormSubmission::observe(SiteFormSubmissionObserver::class);

        RateLimiter::for('site-forms', function (Request $request): Limit {
            return Limit::perMinute(30)->by($request->ip());
        });

        // Forzar HTTPS en producción (Railway reverse proxy)
        if (App::isProduction() || str_starts_with((string) config('app.url'), 'https')) {
            URL::forceScheme('https');
        }

        if (App::environment('production') && config('database.default') === 'sqlite') {
            throw new \RuntimeException(
                'Este proyecto solo usa MySQL/PostgreSQL. Quita DB_CONNECTION=sqlite y configura MYSQL_URL o DATABASE_URL en Railway.'
            );
        }
    }
}
