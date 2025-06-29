<?php

namespace App\Filament\Resources\SectionFourResource\Pages;

use App\Filament\Resources\SectionFourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionFour extends EditRecord
{
    protected static string $resource = SectionFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
