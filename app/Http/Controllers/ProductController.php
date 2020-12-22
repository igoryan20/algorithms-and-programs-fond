<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramsList;
use App\Models\ProgramsCategory;
use App\Models\Categories;

class ProductController extends Controller
{
    public function getProduct($id) {

        $program = ProgramsList::where('id', $id)->first();

        $programsCategories = ProgramsCategory::where('program_id', $id)->get()->all();

        $categories = [];
        foreach ($programsCategories as $programsCategory) {
            $category = Categories::where('id', $programsCategory->category_id)->first();
            array_push($categories, $category->category);
        }

        return view('/pages/product', ['program' => $program, 'categories' => $categories]);
    }
}
