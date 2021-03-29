<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator; 
use App\Models\{
    User
};

class DesiredProductsController extends Controller
{
    function getDesiredProducts() {

        $user = Auth::user();
        $desiredProducts = $user->products;
        $desiredProducts = new LengthAwarePaginator($desiredProducts, count($desiredProducts), 10);

        return view('/pages/desired-products', ['desiredProducts' => $desiredProducts]);
    }
}
