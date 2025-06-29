<?php

namespace App\Filament\Resources\SectionSixResource\Pages;

use App\Filament\Resources\SectionSixResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionSixes extends ListRecords
{
    protected static string $resource = SectionSixResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
