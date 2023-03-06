<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Participants;
use Filament\Widgets\PolarAreaChartWidget;

class SessionsChart extends PolarAreaChartWidget
{
    protected static ?string $heading = 'Number of Participants per Session';

    protected static ?int $sort = 2;

    // protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $participants = Participants::select('session')->get()->groupby(function ($participants) {
            return $participants->session;
        });

        $quantities = [];
        foreach ($participants as $participant => $value) {
            array_push($quantities, $value->count());
        }
        return [
            'datasets' => [
                [
                    'label' => 'Participants Registered',
                    'data' => $quantities,
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)',
                        'rgba(75, 192, 192)',
                        'rgba(255, 205, 86)',
                        'rgba(54, 162, 235)',
                        'rgba(201, 203, 207)',
                    ],
                    'borderWidth' => 1
                ],
            ],
            'labels' => $participants->keys(),
        ];
    }
}
