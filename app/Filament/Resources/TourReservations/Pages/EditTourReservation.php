<?php

namespace App\Filament\Resources\TourReservations\Pages;

use App\Filament\Resources\TourReservations\TourReservationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTourReservation extends EditRecord
{
    protected static string $resource = TourReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
