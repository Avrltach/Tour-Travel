<?php

namespace App\Filament\Resources\TourReservations\Pages;

use App\Filament\Resources\TourReservations\TourReservationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTourReservation extends ViewRecord
{
    protected static string $resource = TourReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
