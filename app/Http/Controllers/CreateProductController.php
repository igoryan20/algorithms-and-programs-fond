<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function __invoke() {
        return view('pages/сreate-product-page');
    }
}
