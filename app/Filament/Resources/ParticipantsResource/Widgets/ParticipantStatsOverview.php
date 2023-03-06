<?php

namespace App\Filament\Resources\ParticipantsResource\Widgets;

use Carbon\Carbon;
use App\Models\Participants;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ParticipantStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $session1 = Participants::where('session', 'Building Supportive Communities for Women in Tech')->count('session');
        $session2 = Participants::where('session', 'Digital Skills for Female Entrepreneurs')->count('session');
        $session3 = Participants::where('session', 'Cybersecurity and Artificial Intelligence')->count('session');
        $session4 = Participants::where('session', 'Breaking the Glass Ceiling in Tech Careers')->count('session');

        $participants = Participants::select('created_at')->get()->groupby(function ($participants) {
            return Carbon::parse($participants->created_at)->format('D, jS M y');
        });

        $quantities = [];
        foreach ($participants as $participant => $value) {
            array_push($quantities, $value->count());
        }

        return [
            Card::make('Total Number', Participants::all()->count())
                ->description('Registered Participants')
                ->descriptionIcon('heroicon-s-user')
                ->color('success')
                ->chart($quantities),
            // Card::make('Session', $session1)
            //     ->description('Building Supportive Communities for Women in Tech')
            //     ->descriptionIcon('heroicon-s-users')
            //     ->color('warning'),
            // Card::make('Session', $session2)
            //     ->description('Digital Skills for Female Entrepreneurs')
            //     ->descriptionIcon('heroicon-s-users')
            //     ->color('info'),
            // Card::make('Session', $session3)
            //     ->description('Cybersecurity and Artificial Intelligence')
            //     ->descriptionIcon('heroicon-s-users')
            //     ->color('warning'),
            // Card::make('Session', $session4)
            //     ->description('Breaking the Glass Ceiling in Tech Careers')
            //     ->descriptionIcon('heroicon-s-users')
            //     ->color('warning'),
        ];
    }
}
