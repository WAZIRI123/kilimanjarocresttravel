<?php

namespace App\Filament\Resources\SectionFiveResource\Pages;

use App\Filament\Resources\SectionFiveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionFives extends ListRecords
{
    protected static string $resource = SectionFiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
