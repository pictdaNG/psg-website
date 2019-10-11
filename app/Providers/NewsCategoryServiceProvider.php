<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NewsCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\NewsCategory\NewsCategoryContract',
            'App\Repositories\NewsCategory\EloquentNewsCategoryRepository');
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
