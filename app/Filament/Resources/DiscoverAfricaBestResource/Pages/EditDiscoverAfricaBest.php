<?php

namespace App\Filament\Resources\DiscoverAfricaBestResource\Pages;

use App\Filament\Resources\DiscoverAfricaBestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscoverAfricaBest extends EditRecord
{
    protected static string $resource = DiscoverAfricaBestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
