<?php

namespace Saddamsaifi1992\AdminPanelBootstrap;

use Illuminate\Support\ServiceProvider;

class AdminPanelBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'admin-panel-bootstrap');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin-panel-bootstrap');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('admin-panel-bootstrap.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/admin-panel-bootstrap'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/admin-panel-bootstrap'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/admin-panel-bootstrap'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'admin-panel-bootstrap');

        // Register the main class to use with the facade
        $this->app->singleton('admin-panel-bootstrap', function () {
            return new AdminPanelBootstrap;
        });
    }
}
