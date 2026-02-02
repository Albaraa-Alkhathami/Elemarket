<?php

namespace App\Filament\Resources\Elements\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ElementsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('symbol')
                    ->searchable(),
                TextColumn::make('category')
                    ->searchable(),
                TextColumn::make('form')
                    ->searchable(),
                TextColumn::make('purity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('radioactivityLevel')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pricePerUnit')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('availabilityStatus')
                    ->searchable(),
                TextColumn::make('regulatoryClass')
                    ->searchable(),
                TextColumn::make('sourceId')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('source.name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
