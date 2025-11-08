<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('package_id')
                    ->required()
                    ->numeric(),
                TextInput::make('hotel_id')
                    ->tel()
                    ->required()
                    ->numeric(),
                TextInput::make('promo_code_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('no_telp')
                    ->tel()
                    ->required()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required(),
                DatePicker::make('departure_date')
                    ->required(),
                DatePicker::make('number_of_participants')
                    ->required(),
                DatePicker::make('total_price')
                    ->required(),
                DatePicker::make('status_booking')
                    ->required(),
                DatePicker::make('code_booking')
                    ->required(),
            ]);
    }
}
