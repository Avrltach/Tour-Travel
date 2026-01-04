<?php

namespace App\Filament\Resources\TransportReservations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TransportReservationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('fleet_type'),
                TextEntry::make('fleet_count')
                    ->numeric(),
                TextEntry::make('institution'),
                TextEntry::make('greeting'),
                TextEntry::make('full_name'),
                TextEntry::make('whatsapp'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('pickup_location'),
                TextEntry::make('destination'),
                TextEntry::make('participants')
                    ->numeric(),
                TextEntry::make('travel_date')
                    ->date(),
                TextEntry::make('travel_duration'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
