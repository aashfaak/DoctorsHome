<?php

namespace App\Filament\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->options([
                        'video'   => 'Video Consultation',
                        'home'    => 'Home Visit',
                        'clinic'  => 'In-Clinic',
                        'lab'     => 'Lab Test',
                        'checkup' => 'Health Checkup',
                    ])
                    ->required(),
                Select::make('doctor_id')
                    ->label('Doctor')
                    ->relationship('doctor', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(20),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->maxLength(150),
                DatePicker::make('date')
                    ->required(),
                TimePicker::make('time')
                    ->required(),
                Select::make('status')
                    ->options([
                        'pending'   => 'Pending',
                        'confirmed' => 'Confirmed',
                        'done'      => 'Done',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}