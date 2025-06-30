<?php

namespace App\Filament\Resources\SectionTenResource\Pages;

use App\Filament\Resources\SectionTenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionTens extends ListRecords
{
    protected static string $resource = SectionTenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
