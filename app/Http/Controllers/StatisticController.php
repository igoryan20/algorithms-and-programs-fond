<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    User,
    Release
};

class StatisticController extends Controller
{
    public function getStatistic()
    {
        $productsCount = count(Product::all());
        $usersCount = count(User::where('group_id', 1)->get());
        $developersCount = count(User::where('group_id', 2)->get());
        $releasesCount = (new Release)->getReleasesCount();

        return view('/pages/statistics',
                    ['productsCount' => $productsCount, 'usersCount' => $usersCount,
                     'releasesCount' => $releasesCount, 'developersCount' => $developersCount]);
    }
}
