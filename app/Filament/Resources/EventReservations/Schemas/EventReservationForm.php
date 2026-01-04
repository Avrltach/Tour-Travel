<?php

namespace App\Filament\Resources\EventReservations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class EventReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('event_type')
                    ->options([
            'Company Gathering' => 'Company gathering',
            'Family Gathering' => 'Family gathering',
            'Outing Kantor' => 'Outing kantor',
            'Seminar' => 'Seminar',
            'Workshop' => 'Workshop',
            'Lainnya' => 'Lainnya',
        ])
                    ->required(),
                TextInput::make('event_name')
                    ->required(),
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
                DatePicker::make('event_date')
                    ->required(),
                TimePicker::make('start_time')
                    ->required(),
                TimePicker::make('end_time')
                    ->required(),
                TextInput::make('event_location')
                    ->required(),
                TextInput::make('city')
                    ->default(null),
                TextInput::make('participants')
                    ->numeric()
                    ->default(null),
                TextInput::make('event_duration')
                    ->default(null),
                TextInput::make('services')
                    ->default(null),
                TextInput::make('concept')
                    ->default(null),
                TextInput::make('budget')
                    ->default(null),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
