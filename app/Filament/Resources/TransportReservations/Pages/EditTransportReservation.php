<?php

namespace App\Filament\Resources\TransportReservations\Pages;

use App\Filament\Resources\TransportReservations\TransportReservationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTransportReservation extends EditRecord
{
    protected static string $resource = TransportReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
