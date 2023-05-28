<?php

namespace App\Charts;

use App\Models\Calons;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class VotingChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $calons = Calons::all();
        $calon = [];
        foreach ($calons as $c) {
            $calon[] = $c->nama_ketua . '-' . $c->nama_wakil;
        }

        $data = [];
        foreach ($calons as $vote) {
            $data[] = $vote->suara;
        }


        return $this->chart->pieChart()
            ->addData($data)
            ->setLabels($calon);
    }
}
