<?php

namespace Nisarr\LaraResponse;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Nisarr\LaraResponse\Facade\RespondFacade;


class LaraResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {   

        if(config('lara-response.enable_helpers')){
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

        $loader = AliasLoader::getInstance();
        
        $this->app->bind('Respond', Respond::class);
        $loader->alias('Respond', RespondFacade::class);
    }
}
