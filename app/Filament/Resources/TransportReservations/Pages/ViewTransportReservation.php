<?php

namespace App\Filament\Resources\TransportReservations\Pages;

use App\Filament\Resources\TransportReservations\TransportReservationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTransportReservation extends ViewRecord
{
    protected static string $resource = TransportReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
