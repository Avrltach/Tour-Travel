<?php

namespace App\Filament\Resources\TransportReservations;

use App\Filament\Resources\TransportReservations\Pages\CreateTransportReservation;
use App\Filament\Resources\TransportReservations\Pages\EditTransportReservation;
use App\Filament\Resources\TransportReservations\Pages\ListTransportReservations;
use App\Filament\Resources\TransportReservations\Pages\ViewTransportReservation;
use App\Filament\Resources\TransportReservations\Schemas\TransportReservationForm;
use App\Filament\Resources\TransportReservations\Schemas\TransportReservationInfolist;
use App\Filament\Resources\TransportReservations\Tables\TransportReservationsTable;
use App\Models\TransportReservation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TransportReservationResource extends Resource
{
    protected static ?string $model = TransportReservation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTruck;

    protected static ?string $recordTitleAttribute = 'full_name';

    public static function form(Schema $schema): Schema
    {
        return TransportReservationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TransportReservationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransportReservationsTable::configure($table);
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
            'index' => ListTransportReservations::route('/'),
            'create' => CreateTransportReservation::route('/create'),
            'view' => ViewTransportReservation::route('/{record}'),
            'edit' => EditTransportReservation::route('/{record}/edit'),
        ];
    }
}
