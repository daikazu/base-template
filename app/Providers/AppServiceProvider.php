<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Livewire::forceAssetInjection();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict(! $this->app->isProduction());

        Str::macro('removeTrailingDoubleSlash', function ($value) {
            // Your custom logic here
            if (Str::endsWith($value, '//')) {
                // If it does, remove the last slash
                return substr($value, 0, -1);
            }

            return $value;
        });

        Cache::macro('staleWhileRevalidate', function ($key, $ttl, $callback) {
            if (Cache::has($key)) {
                App::terminating(fn () => Cache::put($key, $callback(), $ttl));
            }

            return Cache::remember($key, $ttl, $callback);
        });
    }
}
