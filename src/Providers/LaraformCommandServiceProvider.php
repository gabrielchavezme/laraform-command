<?php

namespace GabrielChavezMe\LaraformCommand\Providers;

use Illuminate\Support\ServiceProvider;
use GabrielChavezMe\LaraformCommand\Commands\Make\LaraformClassCommand;

class LaraformCommandServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaraformClassCommand::class,
            ]);
        }
    }
}