<?php

namespace Askedio\LaravelVendorPackage\Providers;

use App;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Register routes, translations, views and publishers.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require realpath(__DIR__.'/../Http/web.php');
        }

        $this->loadTranslationsFrom(realpath(__DIR__.'/../../resources/lang'), 'LaravelVendorPackage');

        $this->loadViewsFrom(realpath(__DIR__.'/../../resources/views'), 'LaravelVendorPackage');

        $this->publishes([realpath(__DIR__.'/../../resources/views') => base_path('resources/views/vendor/askedio/laravelvendorpackage')], 'views');

        $this->publishes([realpath(__DIR__.'/../../resources/assets') => public_path('assets')], 'public');

        $this->publishes([realpath(__DIR__.'/../../resources/config') => config_path('')], 'config');

        $this->publishes([realpath(__DIR__.'/../../database/migrations') => database_path('migrations')], 'migrations');

        $this->publishes([realpath(__DIR__.'/../../database/seeds') => database_path('seeds')], 'seeds');
    }
}
