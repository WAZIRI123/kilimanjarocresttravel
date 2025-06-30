<?php

namespace App\Filament\Resources\SectionNineResource\Pages;

use App\Filament\Resources\SectionNineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionNine extends EditRecord
{
    protected static string $resource = SectionNineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
