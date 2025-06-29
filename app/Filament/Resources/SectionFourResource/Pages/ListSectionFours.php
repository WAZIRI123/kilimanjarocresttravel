<?php

namespace App\Filament\Resources\SectionFourResource\Pages;

use App\Filament\Resources\SectionFourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionFours extends ListRecords
{
    protected static string $resource = SectionFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
