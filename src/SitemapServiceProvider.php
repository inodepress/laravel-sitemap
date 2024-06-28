<?php

namespace Inodepress\Sitemap;

use Illuminate\Support\ServiceProvider;
use Inodepress\Crawler\Crawler;

class SitemapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-sitemap');

        $this->publishes([__DIR__ . '/../public' => public_path('/')], 'public');

        $this->publishes([
            __DIR__.'/../config/sitemap.php' => config_path('sitemap.php'),
        ], 'config');

        $this->app->when(SitemapGenerator::class)
            ->needs(Crawler::class)
            ->give(function () {
                return Crawler::create(config('sitemap.guzzle_options'));
            });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/sitemap.php', 'sitemap');
    }
}
