<?php

namespace App\Filament\Resources\TransactionParticipants;

use App\Filament\Resources\TransactionParticipants\Pages\CreateTransactionParticipants;
use App\Filament\Resources\TransactionParticipants\Pages\EditTransactionParticipants;
use App\Filament\Resources\TransactionParticipants\Pages\ListTransactionParticipants;
use App\Filament\Resources\TransactionParticipants\Schemas\TransactionParticipantsForm;
use App\Filament\Resources\TransactionParticipants\Tables\TransactionParticipantsTable;
use App\Models\TransactionParticipants;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionParticipantsResource extends Resource
{
    protected static ?string $model = TransactionParticipants::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return TransactionParticipantsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransactionParticipantsTable::configure($table);
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
            'index' => ListTransactionParticipants::route('/'),
            'create' => CreateTransactionParticipants::route('/create'),
            'edit' => EditTransactionParticipants::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
