<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LucaCalcaterra\FilamentSwreportsPlugin\Commands\FilamentSwreportsPluginCommand;

class FilamentSwreportsPluginServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-swreports-plugin')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-swreports-plugin_table')
            ->hasCommand(FilamentSwreportsPluginCommand::class);
    }
}
