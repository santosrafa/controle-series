<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function ListarSeries()
    {
        $series = [
            'Lost',
            'Superman',
            'Robocoop'
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
