<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CreateProductController extends Controller
{
    public function getCreateProductPage() {

        $categories = Category::all();

        return view('pages/сreate-product-page', ['categories'  => $categories]);
    }
}
