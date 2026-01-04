<?php

namespace App\Filament\Resources\TourReservations;

use App\Filament\Resources\TourReservations\Pages\CreateTourReservation;
use App\Filament\Resources\TourReservations\Pages\EditTourReservation;
use App\Filament\Resources\TourReservations\Pages\ListTourReservations;
use App\Filament\Resources\TourReservations\Pages\ViewTourReservation;
use App\Filament\Resources\TourReservations\Schemas\TourReservationForm;
use App\Filament\Resources\TourReservations\Schemas\TourReservationInfolist;
use App\Filament\Resources\TourReservations\Tables\TourReservationsTable;
use App\Models\TourReservation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TourReservationResource extends Resource
{
    protected static ?string $model = TourReservation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMap;

    protected static ?string $recordTitleAttribute = 'full_name';

    public static function form(Schema $schema): Schema
    {
        return TourReservationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TourReservationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TourReservationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTourReservations::route('/'),
            'create' => CreateTourReservation::route('/create'),
            'view' => ViewTourReservation::route('/{record}'),
            'edit' => EditTourReservation::route('/{record}/edit'),
        ];
    }
}
