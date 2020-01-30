<?php

namespace Laraman\Beyonic;

use Illuminate\Support\ServiceProvider;
use Laraman\Beyonic\Http\Controllers\BeyonicController;

class BeyonicServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/beyonic.php' => config_path('beyonic.php'),
        ]);
    }

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