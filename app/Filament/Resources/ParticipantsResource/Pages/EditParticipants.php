<?php

namespace App\Filament\Resources\ParticipantsResource\Pages;

use App\Filament\Resources\ParticipantsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParticipants extends EditRecord
{
    protected static string $resource = ParticipantsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
