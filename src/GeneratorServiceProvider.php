<?php

namespace Intellicore\PinGenerator;

use Illuminate\Support\ServiceProvider;
use Intellicore\PinGenerator\Console\IntellicoreCommand;

class GeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                IntellicoreCommand::class,
            ]);
        }
    }
}