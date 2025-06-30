<?php

namespace App\Filament\Resources\SectionEightResource\Pages;

use App\Filament\Resources\SectionEightResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionEight extends EditRecord
{
    protected static string $resource = SectionEightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}