<?php

namespace App\Filament\Resources\DiscoverAfricaBestResource\Pages;

use App\Filament\Resources\DiscoverAfricaBestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiscoverAfricaBests extends ListRecords
{
    protected static string $resource = DiscoverAfricaBestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
