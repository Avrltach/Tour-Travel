<?php

namespace App\Filament\Resources\TourReservations\Pages;

use App\Filament\Resources\TourReservations\TourReservationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTourReservations extends ListRecords
{
    protected static string $resource = TourReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
