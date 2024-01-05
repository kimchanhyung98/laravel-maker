<?php

namespace Kimchanhyung98\LaravelMaker;

use Kimchanhyung98\LaravelMaker\Commands\ActionCommand;
use Kimchanhyung98\LaravelMaker\Commands\ServiceCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-maker')
            ->hasConfigFile('maker')
            ->hasCommand(ActionCommand::class)
            ->hasCommand(ServiceCommand::class);
    }
}
