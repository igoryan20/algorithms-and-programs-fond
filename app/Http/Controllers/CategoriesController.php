<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function getCategories(Request $request) {

        $categories = Category::all();

        return view('pages/categories', ['categories' => $categories]);
    }

    public function postCategory(Request $request) {

        if ($request->id) {
            $categoriesModel = Category::find($request->id);
            if ($request->type == 'delete') {
                $categoriesModel->delete();
            }
        } else {
            $categoriesModel = new Categories;
        }

        if ($request->type != 'delete') {
            $categoriesModel->category = $request->title;
            $categoriesModel->description = $request->description;
            $categoriesModel->url = $request->url;
            $categoriesModel->weight = $request->weight;
            $categoriesModel->save();
        }
        $categories = Category::all();

        return view('pages/categories', ['categories' => $categories]);
    }
}
