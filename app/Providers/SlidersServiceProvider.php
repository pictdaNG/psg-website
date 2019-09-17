<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SlidersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Slider\SliderContract',
        'App\Repositories\Slider\EloquentSliderRepository');
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
