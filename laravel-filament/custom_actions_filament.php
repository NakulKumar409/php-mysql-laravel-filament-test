<?php
use Filament\Resources\Actions\Action;

public static function actions(): array
{
    return [
        Action::make('approve')
            ->action(function ($record) {
                $record->update(['status' => 'approved']);
            })
            ->requiresConfirmation()
            ->label('Approve'),
    ];
}
?>