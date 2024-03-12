<?php

namespace App\Console\Commands;

use Exception;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'app:generate-sitemap {--i|images : Include image URLs in the sitemap}';

    protected $description = 'Crawl the website and generates a sitemap.xml file.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {

            $sitemap = SitemapGenerator::create(config('app.url'))
                ->shouldCrawl(function (Uri $url) {
                    $excludedPaths = ['admin', 'login', 'register', 'password', 'blog/tag', 'blog/category'];
                    foreach ($excludedPaths as $path) {
                        if (Str::contains($url->getPath(), $path)) {
                            return false;
                        }
                    }

                    return true;
                })
                ->hasCrawled(function (Url $url) {
                    if (! $this->option('images') && preg_match('/\.(jpg|png|gif|jpeg)$/i', $url->url)) {
                        return null;
                    }

                    return $url;
                })
                ->getSitemap();

            $categories = ['pages' => [], 'blog' => [], 'images' => []];

            foreach ($sitemap->getTags() as $url) {
                if (str_contains($url->url, '/blog')) {
                    $categories['blog'][] = $url;
                } elseif (preg_match('/\.(jpg|png|gif|jpeg)$/i', $url->url)) {
                    $categories['images'][] = $url;
                } else {
                    $categories['pages'][] = $url;
                }
            }

            // Generate sitemaps for each category
            $sitemapIndex = SitemapIndex::create();

            foreach ($categories as $category => $urls) {
                $sitemap = \Spatie\Sitemap\Sitemap::create();

                foreach ($urls as $url) {
                    $sitemap->add($url);
                }

                $fileName = "sitemap_{$category}.xml";

                Storage::disk('local')->put($fileName, $sitemap->render());

                // Add the sitemap to the index
                $sitemapIndex->add(Sitemap::create(config('app.url') . "/{$fileName}"));
            }

            // Write the sitemap index file
            Storage::disk('local')->put('sitemap.xml', $sitemapIndex->render());

            $this->info('Sitemap index and sitemaps generated successfully.');
        } catch (Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
        }

    }
}
