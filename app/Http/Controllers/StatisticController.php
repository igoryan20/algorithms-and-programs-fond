<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    ProgramsList,
    User,
    Release
};

class StatisticController extends Controller
{
    public function getStatistic()
    {
        $programsCount = (new ProgramsList)->getProgramsCount();
        $usersCount = (new User)->getUsersCount();
        $releasesCount = (new Release)->getReleasesCount();

        return view('/pages/statistics',
                    ['programsCount' => $programsCount, 'usersCount' => $usersCount,
                     'releasesCount' => $releasesCount]);
    }
}
