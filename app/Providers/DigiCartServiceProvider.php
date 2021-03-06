<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DigiCartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('digicart',function(){
            return new Digicart();
        });
    }
}
