<?php

namespace App\Filament\Resources\ExperienceAfricaResource\Pages;

use App\Filament\Resources\ExperienceAfricaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExperienceAfrica extends EditRecord
{
    protected static string $resource = ExperienceAfricaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
