<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function __invoke() {

        $categories = Categories::all();

        return view('pages/categories', ['categories' => $categories]);
    }
}
