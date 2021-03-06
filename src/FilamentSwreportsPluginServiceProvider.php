<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin;

use Filament\PluginServiceProvider;
use LucaCalcaterra\FilamentSwreportsPlugin\Commands\FilamentSwreportsPluginCommand;
use LucaCalcaterra\FilamentSwreportsPlugin\Resources\ReportResource;
use Spatie\LaravelPackageTools\Package;

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
            ->hasMigrations([
                'create_filament_swreports_plugin_table',
                '2022_02_24_202551_create_reports_table',
            ])
            ->hasCommand(FilamentSwreportsPluginCommand::class);
    }
}
