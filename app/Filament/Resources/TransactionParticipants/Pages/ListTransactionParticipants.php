<?php

namespace App\Filament\Resources\TransactionParticipants\Pages;

use App\Filament\Resources\TransactionParticipants\TransactionParticipantsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTransactionParticipants extends ListRecords
{
    protected static string $resource = TransactionParticipantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
