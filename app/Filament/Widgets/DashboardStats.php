<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Doctor;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $unreadMessages = ContactMessage::query()->where('is_read', false)->count();

        return [
            Stat::make('Active Doctors', Doctor::query()->where('is_active', true)->count())
                ->description('Currently available doctors')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make(
                'Upcoming Appointments',
                Appointment::query()
                    ->whereDate('date', '>=', today())
                    ->whereIn('status', ['pending', 'confirmed'])
                    ->count(),
            )
                ->description('Pending or confirmed, from today onward')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('warning'),
            Stat::make('Messages Received', ContactMessage::query()->count())
                ->description("{$unreadMessages} unread")
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary'),
        ];
    }
}
