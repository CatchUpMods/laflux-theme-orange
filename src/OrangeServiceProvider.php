<?php

namespace ExtensionsValley\OrangeTheme;

use Illuminate\Support\ServiceProvider;
use ExtensionsValley\Basetheme\Helpers\ThemeHelper;

class OrangeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'Basetheme');

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/template/extensionsvalley/orange')
        ]);

        $this->publishes([
            __DIR__ . '/../public' => public_path('template/extensionsvalley/orange'),
        ]);
        /*$this->publishes([
            __DIR__ . '/Database/migrations' => $this->app->databasePath() . '/migrations',
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/Database/seeds' => $this->app->databasePath() . '/seeds',
        ], 'seeds');*/
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        // Catching up the events
        foreach (new \DirectoryIterator(__DIR__ . '/Events/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                include __DIR__ . '/Events/' . $fileInfo->getFilename();
            }
        }
    }
}
