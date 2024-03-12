<?php

use Illuminate\Support\Facades\Route;

/**
 * Route for automatically generated sitemap files.
 * Serves sitemap.xml or specific sitemap files like sitemap_blog.xml.
 */
Route::get('sitemap{type?}.xml', function ($type = null) {
    $fileName = is_null($type) ? 'sitemap.xml' : "sitemap{$type}.xml";
    $path = storage_path("app/{$fileName}");

    if (file_exists($path)) {
        return response()->file($path, [
            'Content-Type' => 'application/xml',
        ]);
    }

    abort(404);
})->where('type', '(_[a-zA-Z0-9]+)?');

Route::view('/', 'pages.home')->name('home');
