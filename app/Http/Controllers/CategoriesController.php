<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function getCategories(Request $request) {

        $categories = Categories::all();

        return view('pages/categories', ['categories' => $categories]);
    }

    public function postCategories(Request $request) {

        $categories = Categories::all();
        return view('pages/categories', ['categories' => $categories]);
    }
}
