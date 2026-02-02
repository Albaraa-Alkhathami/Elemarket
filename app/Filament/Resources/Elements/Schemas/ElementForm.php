<?php

namespace App\Filament\Resources\Elements\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ElementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('symbol')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('form')
                    ->required(),
                TextInput::make('purity')
                    ->required()
                    ->numeric(),
                TextInput::make('weight')
                    ->required()
                    ->numeric(),
                TextInput::make('radioactivityLevel')
                    ->required()
                    ->numeric(),
                TextInput::make('pricePerUnit')
                    ->required()
                    ->numeric(),
                TextInput::make('availabilityStatus')
                    ->required(),
                TextInput::make('regulatoryClass')
                    ->required(),
                TextInput::make('sourceId')
                    ->required()
                    ->numeric(),
                Select::make('source_id')
                    ->relationship('source', 'name')
                    ->required(),
            ]);
    }
}
