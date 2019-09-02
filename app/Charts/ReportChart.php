<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ReportChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->options([
            'legend' => [
                'display' => true,
                'labels' => [
                    'fontColor' => 'blue'
                ],
            ],

        ]);

    }
}
