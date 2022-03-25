<?php

namespace LucaCalcaterra\FilamentSwreportsPlugin\Resources\ReportResource\Pages;

use Filament\Resources\Pages\ListRecords;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

use LucaCalcaterra\FilamentSwreportsPlugin\Resources\ReportResource;

class ListReports extends ListRecords
{
    protected static string $resource = ReportResource::class;

    protected function getTableQuery(): Builder
    {
        // solo i records dell'utente loggato
        return static::getResource()::getEloquentQuery()->where('user_id', Auth::user()->id);
    }
}
