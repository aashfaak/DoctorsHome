<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('specialty_id')
                    ->relationship('specialty', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('doctors')
                    ->visibility('public'),
                TextInput::make('experience_years')
                    ->label('Experience (years)')
                    ->numeric()
                    ->default(0),
                TextInput::make('fee')
                    ->label('Fee (৳)')
                    ->numeric()
                    ->default(0),
                Textarea::make('bio')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
