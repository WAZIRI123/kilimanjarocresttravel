<?php

namespace App\Filament\Resources\SectionNineResource\Pages;

use App\Filament\Resources\SectionNineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionNines extends ListRecords
{
    protected static string $resource = SectionNineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
