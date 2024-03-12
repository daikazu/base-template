<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use romanzipp\Seo\Builders\StructBuilder;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;
use romanzipp\Seo\Structs\Meta;
use romanzipp\Seo\Structs\Title;

class SeoServiceProvider extends ServiceProvider
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
        StructBuilder::$indent = str_repeat(' ', 4);

        // Add a getTitle method for obtaining the unmodified title

        Seo::macro('getTitle', function () {
            /** @var SeoService $this */
            if (! $title = $this->getStruct(Title::class)) {
                return null;
            }

            if (! $body = $title->getBody()) {
                return null;
            }

            return $body->getOriginalData();
        });

        Seo::macro('customTag', function (string $value) {
            /** @var SeoService $this */

            return $this->add(
                Meta::make()->name('custom')->content($value)
            );
        });

        Blade::directive('seoTitle', fn ($expression) => "<?php seo()->title({$expression}); ?>");
        Blade::directive('seoDescription', fn ($expression) => "<?php seo()->description({$expression}); ?>");
        Blade::directive('seoRobots', fn ($expression) => "<?php  seo()->meta('robots', {$expression}) ?>");
        Blade::directive('seoCanonical', fn ($expression) => "<?php  seo()->canonical({$expression}); ?>");
        Blade::directive('seoImage', fn ($expression) => "<?php  seo()->image({$expression}); ?>");
    }
}
