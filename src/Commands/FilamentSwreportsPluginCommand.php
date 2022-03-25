<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin\Commands;

use Illuminate\Console\Command;

class FilamentSwreportsPluginCommand extends Command
{
    public $signature = 'filament-swreports-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
