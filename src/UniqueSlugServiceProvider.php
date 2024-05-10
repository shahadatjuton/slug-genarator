<?php

namespace Shahadat\UniqueSlug;

use Illuminate\Support\ServiceProvider;



class UniqueSlugServiceProvider extends ServiceProvider{
  /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('unique-slug', function($app){
            return new \Shahadat\UniqueSlug\UniqueSlug();
        });
        $this->mergeConfigFrom(
            __DIR__.'/../config/unique-slug.php', 'unique-slug'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/unique-slug.php' => config_path('unique-slug.php'),
        ]);
    }

}
