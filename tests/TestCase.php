<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use LucaCalcaterra\FilamentSwreportsPlugin\FilamentSwreportsPluginServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'LucaCalcaterra\\FilamentSwreportsPlugin\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentSwreportsPluginServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-swreports-plugin_table.php.stub';
        $migration->up();
        */
    }
}
