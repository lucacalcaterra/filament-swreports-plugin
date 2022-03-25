<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LucaCalcaterra\FilamentSwreportsPlugin\FilamentSwreportsPlugin
 */
class FilamentSwreportsPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-swreports-plugin';
    }
}
