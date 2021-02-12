<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\{
    Product,
    ProgramsOS
};

class MyDevelopmentsController extends Controller
{

    public function getDeveloperProducts(Request $request) {

        $developerProducts = Product::where('developed_by', 6)->get();

        return view('/pages/my-developments', ['developerProducts' => $developerProducts]);
    }
}
