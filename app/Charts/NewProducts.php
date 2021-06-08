<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class NewProducts extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */

    public ?string $name = 'new_products_chart';
    public ?string $routeName = 'new_products_chart';
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['2015', '2016', '2017', '2018', '2019', '2020'])
            ->dataset('Products', [3, 3, 5, 4, 8, 10]);
    }
}
