<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User
};

class DesiredProductsController extends Controller
{
    function getDesiredProducts() {

        $user = User::where('id', session('user_id'))->first();

        $desiredProducts = $user->products;


        return view('/pages/desired-products', ['desiredProducts' => $desiredProducts]);
    }
}
