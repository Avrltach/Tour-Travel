<?php

namespace App\Filament\Resources\TransportReservations\Pages;

use App\Filament\Resources\TransportReservations\TransportReservationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTransportReservations extends ListRecords
{
    protected static string $resource = TransportReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
