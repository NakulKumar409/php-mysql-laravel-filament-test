<?php
use Filament\Resources\Table;
use Filament\Tables\Filters\SelectFilter;

public static function table(Table $table): Table
{
    return $table
        ->filters([
            SelectFilter::make('role')
                ->options([
                    'admin' => 'Admin',
                    'editor' => 'Editor',
                    'user' => 'User',
                ]),
        ]);
}
?>