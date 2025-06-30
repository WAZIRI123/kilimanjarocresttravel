<?php

namespace App\Filament\Resources\SectionEightResource\Pages;

use App\Filament\Resources\SectionEightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionEights extends ListRecords
{
    protected static string $resource = SectionEightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}