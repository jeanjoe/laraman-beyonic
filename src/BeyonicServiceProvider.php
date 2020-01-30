<?php

namespace Laraman\Beyonic;

use Illuminate\Support\ServiceProvider;
use Laraman\Beyonic\Http\Controllers\BeyonicController;

class BeyonicServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/beyonic.php' => config_path('beyonic.php'),
            'config'
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/beyonic.php', 'beyonic'
        );

        $this->app->bind('laraman-beyonic', function() {
            return new BeyonicController;
        });
    }

}