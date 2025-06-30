<?php

namespace App\Filament\Resources\SectionTenResource\Pages;

use App\Filament\Resources\SectionTenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionTen extends EditRecord
{
    protected static string $resource = SectionTenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
