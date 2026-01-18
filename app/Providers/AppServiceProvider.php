<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $appUrl = rtrim(config('app.url'), '/');

        if (! empty($appUrl)) {
            URL::forceRootUrl($appUrl);

            if (str_starts_with($appUrl, 'https://')) {
                URL::forceScheme('https');
            }
        }

        $content = config('learningcube');

        View::share('brand', $content['brand']);
        View::share('navigation', $content['navigation']);
        View::share('footerLinks', $content['footer']);
        View::share('contactInfo', $content['contact']);
    }
}
