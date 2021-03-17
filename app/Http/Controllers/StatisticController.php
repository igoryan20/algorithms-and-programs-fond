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
        $productsCount = (new Product)->getProductsCount();
        $usersCount = (new User)->getUsersCount();
        $releasesCount = (new Release)->getReleasesCount();

        return view('/pages/statistics',
                    ['productsCount' => $productsCount, 'usersCount' => $usersCount,
                     'releasesCount' => $releasesCount]);
    }
}
