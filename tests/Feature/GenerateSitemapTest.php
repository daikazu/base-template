<?php

use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    // Mock the Storage facade to prevent actual file operations
    Storage::fake('local');
});

it('executes the sitemap generation command successfully', function () {
    // Run the command
    $this->artisan('app:generate-sitemap')
        ->assertExitCode(0); // Check if the command exited successfully
});

it('creates a sitemap index and category sitemaps', function () {
    // Run the command
    $this->artisan('app:generate-sitemap')
        ->assertExitCode(0);

    // Assert that the sitemap index and category sitemaps are created
    Storage::disk('local')->assertExists('sitemap_pages.xml');
    Storage::disk('local')->assertExists('sitemap_blog.xml');
    Storage::disk('local')->assertExists('sitemap_images.xml');
    Storage::disk('local')->assertExists('sitemap.xml');
});

it('includes expected URLs in the sitemap', function () {
    // Here you might need to set up your environment in such a way that
    // it generates predictable URLs, or you mock the SitemapGenerator behavior.
    // This is a placeholder for how you might approach testing the content.
    $this->artisan('app:generate-sitemap')
        ->assertExitCode(0);

    // Example of asserting content of one of the sitemaps
    $sitemapContent = Storage::disk('local')->get('sitemap_pages.xml');
    expect($sitemapContent)->toContain('.test/');
    // ... and so on
});
