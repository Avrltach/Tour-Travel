<?php

namespace App\Filament\Resources\EventReservations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EventReservationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('event_type'),
                TextEntry::make('event_name'),
                TextEntry::make('institution'),
                TextEntry::make('greeting'),
                TextEntry::make('full_name'),
                TextEntry::make('whatsapp'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('event_date')
                    ->date(),
                TextEntry::make('start_time')
                    ->time(),
                TextEntry::make('end_time')
                    ->time(),
                TextEntry::make('event_location'),
                TextEntry::make('city'),
                TextEntry::make('participants')
                    ->numeric(),
                TextEntry::make('event_duration'),
                TextEntry::make('services'),
                TextEntry::make('concept'),
                TextEntry::make('budget'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
