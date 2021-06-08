<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsLibraryController extends Controller
{
    public function getProducts()
    {
        return view('/pages/products-library');
    }
}
