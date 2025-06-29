<?php

namespace App\Filament\Resources\SectionFiveResource\Pages;

use App\Filament\Resources\SectionFiveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionFive extends EditRecord
{
    protected static string $resource = SectionFiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
