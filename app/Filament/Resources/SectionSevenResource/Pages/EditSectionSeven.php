<?php

namespace App\Filament\Resources\SectionSevenResource\Pages;

use App\Filament\Resources\SectionSevenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionSeven extends EditRecord
{
    protected static string $resource = SectionSevenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
