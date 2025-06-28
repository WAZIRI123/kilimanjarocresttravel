<?php

namespace App\Filament\Resources\ExperienceAfricaResource\Pages;

use App\Filament\Resources\ExperienceAfricaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperienceAfricas extends ListRecords
{
    protected static string $resource = ExperienceAfricaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
