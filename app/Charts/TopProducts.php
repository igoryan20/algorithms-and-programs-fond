<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class TopProducts extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public ?string $name = 'top_products_chart';
    public ?string $routeName = 'top_products_chart';
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['sadf', 'asdf', 'dsf'])
            ->dataset('Sample', [4, 5, 1]);
    }
}
