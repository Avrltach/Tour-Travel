<?php

namespace App\Filament\Resources\TransactionParticipants\Pages;

use App\Filament\Resources\TransactionParticipants\TransactionParticipantsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditTransactionParticipants extends EditRecord
{
    protected static string $resource = TransactionParticipantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
