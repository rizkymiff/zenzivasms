<?php

namespace rizkymiff\zenzivasms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class ZenzivaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('zenziva', function() {
            return new Zenziva;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/zenziva.php' => config_path().'/zenziva.php'
        ]);
    }
}
