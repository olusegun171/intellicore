<?php

namespace Intellicore\PinGenerator;

use Illuminate\Support\ServiceProvider;
use Intellicore\PinGenerator\Console\IntellicoreCommand;
use Intellicore\PinGenerator\Classes\Generator;

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

        $this->app->bind('intellicore-generator', function ($app) {
            return new Generator();
        });
    }
}
