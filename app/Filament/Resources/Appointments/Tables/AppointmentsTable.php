<?php

namespace App\Filament\Resources\Appointments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class AppointmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('date', 'desc')
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn (string $state) => match ($state) {
                        'video' => 'Video',
                        'home' => 'Home Visit',
                        'clinic' => 'In-Clinic',
                        'lab' => 'Lab Test',
                        'checkup' => 'Health Checkup',
                        default => $state,
                    }),
                TextColumn::make('doctor.name')
                    ->label('Doctor')
                    ->placeholder('Not assigned'),
                TextColumn::make('date')->date('d M Y')->sortable(),
                TextColumn::make('time')->time('h:i A'),
                SelectColumn::make('status')->options([
                    'pending'   => 'Pending',
                    'confirmed' => 'Confirmed',
                    'done'      => 'Done',
                    'cancelled' => 'Cancelled',
                ]),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'pending'   => 'Pending',
                    'confirmed' => 'Confirmed',
                    'done'      => 'Done',
                    'cancelled' => 'Cancelled',
                ]),
                SelectFilter::make('type')->options([
                    'video'   => 'Video Consultation',
                    'home'    => 'Home Visit',
                    'clinic'  => 'In-Clinic',
                    'lab'     => 'Lab Test',
                    'checkup' => 'Health Checkup',
                ]),
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