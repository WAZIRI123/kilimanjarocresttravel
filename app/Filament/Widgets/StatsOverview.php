<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Bookings', Booking::count())
                ->description('All time bookings')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('primary'),
                
            Stat::make('New Bookings', Booking::where('status', 'new')->count())
                ->description('Requires attention')
                ->descriptionIcon('heroicon-o-bell')
                ->color('warning'),
                
            Stat::make('Confirmed Bookings', Booking::where('status', 'confirmed')->count())
                ->description('Upcoming trips')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
                
            Stat::make('Monthly Bookings', Booking::whereMonth('created_at', now()->month)->count())
                ->description(now()->format('F Y'))
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('info'),
        ];
    }
}
