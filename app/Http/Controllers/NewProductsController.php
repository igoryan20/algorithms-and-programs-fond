<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Product;

class NewProductsController extends Controller
{
    public function getNewProducts(Request $request) {

        $newProducts = Product::where('updated_at', '<' , Carbon::now()->subDays(7))->get();

        return view('/pages/new-products', ['newProducts' => $newProducts]);
    }
}
