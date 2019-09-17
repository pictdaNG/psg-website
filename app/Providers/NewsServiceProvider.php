<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\News\NewsContract',
        'App\Repositories\News\EloquentNewsRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
