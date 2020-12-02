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

        $categoriesModel = new Categories;

        $categoriesModel->category = $request->title;
        $categoriesModel->description = $request->description;
        $categoriesModel->url = $request->url;
        $categoriesModel->weight = $request->weight;

        $categoriesModel->save();

        $categories = Categories::all();
        return view('pages/categories', ['categories' => $categories]);
    }
}
