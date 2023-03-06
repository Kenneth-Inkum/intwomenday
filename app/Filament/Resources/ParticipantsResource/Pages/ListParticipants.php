<?php

namespace App\Filament\Resources\ParticipantsResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ParticipantsResource;
use App\Filament\Resources\ParticipantsResource\Widgets\ParticipantStatsOverview;

class ListParticipants extends ListRecords
{
    protected static string $resource = ParticipantsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ParticipantStatsOverview::class,
        ];
    }
}
