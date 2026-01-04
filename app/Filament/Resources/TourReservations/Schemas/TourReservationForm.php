<?php

namespace App\Filament\Resources\TourReservations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class TourReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('whatsapp')
                    ->required(),
                Select::make('trip_type')
                    ->options(['Group Tour' => 'Group tour', 'Private Tour' => 'Private tour', 'Study Tour' => 'Study tour'])
                    ->required(),
                TextInput::make('pickup_location')
                    ->required(),
                TextInput::make('destination')
                    ->required(),
                TextInput::make('participants')
                    ->required()
                    ->numeric(),
                DatePicker::make('departure_date')
                    ->required(),
                TimePicker::make('pickup_time')
                    ->required(),
                TextInput::make('duration')
                    ->default(null),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
