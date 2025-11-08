<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_id')
                    ->required()
                    ->numeric(),
                TextInput::make('payment_method')
                    ->required(),
                Select::make('payment_status')
                    ->options(['paid' => 'Paid', 'pending' => 'Pending'])
                    ->default('pending')
                    ->required(),
                TextInput::make('amount_paid')
                    ->required()
                    ->numeric(),
                DatePicker::make('payment_date'),
                Select::make('transaction_status')
                    ->options(['success' => 'Success', 'failed' => 'Failed', 'processing' => 'Processing'])
                    ->default('processing')
                    ->required(),
            ]);
    }
}
