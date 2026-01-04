<?php

namespace App\Filament\Resources\TourReservations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TourReservationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('whatsapp'),
                TextEntry::make('trip_type'),
                TextEntry::make('pickup_location'),
                TextEntry::make('destination'),
                TextEntry::make('participants')
                    ->numeric(),
                TextEntry::make('departure_date')
                    ->date(),
                TextEntry::make('pickup_time')
                    ->time(),
                TextEntry::make('duration'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
