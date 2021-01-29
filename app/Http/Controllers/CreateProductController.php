<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function getCreateProductPage() {
        return view('pages/сreate-product-page');
    }
}
