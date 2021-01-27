<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramsList;
use App\Models\ProgramsCategory;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;

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

        $photo_paths = $program->productsPhotosPaths;

        if ($photo_paths->isEmpty()) {
            $photo_paths->push('product-photos/default.jpg');
        }
        // foreach ($photo_paths as $photo_path) {
        //     var_dump($photo_path);
        // }

        return view('/pages/product', ['program' => $program, 'categories' => $categories,
                     'photo_paths' => $photo_paths]);
    }
}
