<?php

namespace App\Filament\Resources\SectionSixResource\Pages;

use App\Filament\Resources\SectionSixResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionSix extends EditRecord
{
    protected static string $resource = SectionSixResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
