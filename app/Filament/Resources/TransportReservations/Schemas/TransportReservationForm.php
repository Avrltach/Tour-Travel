<?php

namespace App\Filament\Resources\TransportReservations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TransportReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('fleet_type')
                    ->options([
            'Big Bus' => 'Big bus',
            'Medium Bus' => 'Medium bus',
            'Shuttle Bus' => 'Shuttle bus',
            'MPV' => 'M p v',
            'Lainnya' => 'Lainnya',
        ])
                    ->required(),
                TextInput::make('fleet_count')
                    ->required()
                    ->numeric(),
                TextInput::make('institution')
                    ->default(null),
                TextInput::make('greeting')
                    ->default(null),
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('whatsapp')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('pickup_location')
                    ->required(),
                TextInput::make('destination')
                    ->required(),
                TextInput::make('participants')
                    ->numeric()
                    ->default(null),
                DatePicker::make('travel_date')
                    ->required(),
                TextInput::make('travel_duration')
                    ->default(null),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
