<?php

namespace App\Filament\Resources\Hotels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HotelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_hotel')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('rating')
                    ->required()
                    ->numeric(),
                TextInput::make('contact')
                    ->required()
            ]);
    }
}
