<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\ProgramsOS;
use App\Models\OS;

class OSChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */

    public ?string $name = 'os_chart';
    public ?string $routeName = 'os_chart';
    public function handler(Request $request): Chartisan
    {
        $oss = OS::all();

        $os_count = [];
        $os_names = [];
        foreach ($oss as $os) {
            array_push($os_count, ProgramsOS::where('osId', $os->id)->get()->count());
            array_push($os_names, $os->os);
        }

        return Chartisan::build()
            ->labels($os_names)
            ->dataset('Sample', $os_count);
    }
}
