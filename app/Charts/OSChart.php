<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\{
    ProgramOperationSystem,
    OperationSystem
};

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
        $operationSystems = OperationSystem::all();

        $operationSystemCount = [];
        $operationSystemNames = [];
        foreach ($operationSystems as $operationSystem) {
            array_push($operationSystemCount, ProgramOperationSystem::where('osId', $operationSystem->id)->get()->count());
            array_push($operationSystemNames, $operationSystem->name);
        }

        return Chartisan::build()
            ->labels($operationSystemNames)
            ->dataset('Sample', $operationSystemCount);
    }
}
