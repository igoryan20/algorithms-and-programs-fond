<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Product,
    ProgramsOS
};

class MyDevelopmentsController extends Controller
{

    public function getDeveloperProducts(Request $request) {

        $developerProducts = Product::where('developed_by', Auth::user()->id)->paginate(10);

        return view('/pages/my-developments', ['developerProducts' => $developerProducts]);
    }
}
