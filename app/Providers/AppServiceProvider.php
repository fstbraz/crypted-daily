<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Clockwork\Support\Laravel\ClockworkServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() != 'production') {
            if ($this->app->runningInConsole()) {
                $this->app->register(IdeHelperServiceProvider::class);
            } else {
                $this->app->register(ClockworkServiceProvider::class);
            }
            $this->app->register(DebugbarServiceProvider::class);
            //$this->app->register(DbProfilerServiceProvider::class);

            $loader = AliasLoader::getInstance();
            $loader->alias('Debugbar', Barryvdh\Debugbar\Facade::class);
            $loader->alias('Clockwork', Clockwork\Support\Laravel\Facade::class);
        }
    }
}
