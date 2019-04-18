<?php

namespace utic\phpsmssender;

use Illuminate\Support\ServiceProvider;

class PhpSmSServiceProvider extends ServiceProvider
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
        include __DIR__.'/routes.php';
        //
    }
}
