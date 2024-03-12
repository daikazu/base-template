<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use romanzipp\Seo\Structs\Link as LinkMeta;
use romanzipp\Seo\Structs\Meta;
use romanzipp\Seo\Structs\Meta\OpenGraph;
use romanzipp\Seo\Structs\Meta\Twitter;
use Spatie\SchemaOrg\Schema;
use Symfony\Component\HttpFoundation\Response;

class AddSeoDefaults
{
    public function handle(Request $request, Closure $next): Response
    {

        seo()->charset();

        seo()->viewport();

        seo()->csrfToken();

        seo()->canonical(Str::removeTrailingDoubleSlash(url()->current()));

        $this->includeFavicons();

        $this->includeOpenGraph();

        $this->includeTwitter();

        $this->includeJsonLd();

        return $next($request);
    }

    private function includeFavicons(): void
    {
        seo()->addMany([
            // Favicons
            LinkMeta::make()
                ->type('text/plain')
                ->rel('author')
                ->href(url(asset('humans.txt'))),

            LinkMeta::make()
                ->rel('apple-touch-icon')
                ->attr('sizes', '180x180')
                ->href('/apple-touch-icon.png'),

            LinkMeta::make()
                ->rel('icon')
                ->attr('sizes', '32x32')
                ->attr('type', 'image/png')
                ->href('/favicon-32x32.png'),

            LinkMeta::make()
                ->rel('icon')
                ->attr('sizes', '16x16')
                ->attr('type', 'image/png')
                ->href('/favicon-16x16.png'),

            LinkMeta::make()
                ->rel('manifest')
                ->href('/site.webmanifest'),

            LinkMeta::make()
                ->rel('mask-icon')
                ->attr('color', '#5bbad5')
                ->href('/safari-pinned-tab.svg'),

            Meta::make()
                ->name('theme-color')
                ->content('#081728'),

            Meta::make()
                ->name('msapplication-TileColor')
                ->content('#2b5797'),
        ]);
    }

    private function includeOpenGraph(): void
    {
        seo()->addMany([

            // OpenGraph
            OpenGraph::make()
                ->property('locale')
                ->content(app()->getLocale()),

            OpenGraph::make()
                ->property('site_name')
                ->content(config('website.name')),

            OpenGraph::make()
                ->property('type')
                ->content('website'),
            OpenGraph::make()
                ->property('url')
                ->content(Str::removeTrailingDoubleSlash(url()->current())),
        ]);

    }

    private function includeTwitter(): void
    {
        seo()->add(
            Twitter::make()
                ->name('card')
                ->content('summary_large_image'),
        );

        if (config('website.company.social.twitter')) {

            seo()->add(
                Twitter::make()
                    ->name('site')
                    ->content(config('website.company.social.twitter'))
            );

        }
    }

    private function includeJsonLd(): void
    {

        seo()->addSchema(
            Schema::website()
                ->name(config('website.name'))
                ->url(config('website.url'))
                ->setProperty('alternateName', config('website.alternate_name'))
                ->setProperty('sameAs', config('website.company.same_as'))
        );

        // https://developers.google.com/search/docs/appearance/structured-data/organization
        // PARENT_ORGANIZATION_CODE_BLOCK

        // https://developers.google.com/search/docs/appearance/structured-data/organization
        // ORGANIZATION_CODE_BLOCK

        // https://developers.google.com/search/docs/appearance/structured-data/local-business
        // LOCAL_BUSINESS_CODE_BLOCK
    }
}
