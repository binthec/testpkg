<?php

namespace Binthec\TestPkg\Providers;

use Binthec\TestPkg\Clap;
use Illuminate\Support\ServiceProvider;

class ClapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Clap::class, function($app){
            return new Clap();
        });
    }
}
