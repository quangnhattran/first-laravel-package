<?php

namespace Qt\FirstLaravelPackage;

use Qt\FirstLaravelPackage\Commands\FirstLaravelPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FirstLaravelPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('first-laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_first-package_table')
            ->hasCommand(FirstLaravelPackageCommand::class);
    }
}
