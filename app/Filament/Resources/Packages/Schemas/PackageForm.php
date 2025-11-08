<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_package')
                    ->required(),
                Select::make('category')
                    ->options(['sekolah' => 'Sekolah', 'umum' => 'Umum', 'tk' => 'Tk'])
                    ->default('umum')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('duration')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('facility')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
