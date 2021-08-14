<?php

namespace Easoblue\LaraResponse;

use Illuminate\Support\ServiceProvider;


class LaraResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {   

        if(config('lara-response.helpers')){
            $helper = __DIR__.DIRECTORY_SEPARATOR.'helpers'.DIRECTORY_SEPARATOR.'lara-response.php';
            require_once $helper;
        }
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lara-response.php', 'lara-response');
    }
}
