<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use LucaCalcaterra\FilamentSwreportsPlugin\Commands\FilamentSwreportsPluginCommand;
use LucaCalcaterra\FilamentSwreportsPlugin\Resources\ReportResource;

class FilamentSwreportsPluginServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        ReportResource::class,
    ];


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
            ->hasMigration('create_filament_swreports_plugin_table')
            ->hasCommand(FilamentSwreportsPluginCommand::class);
    }
}
