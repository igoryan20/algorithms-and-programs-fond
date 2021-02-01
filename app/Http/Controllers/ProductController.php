<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Models\{
    Product,
    ProductCategory,
    Category,
    ProductPhotoPath
};

class ProductController extends Controller
{
    public function getProduct($id) {

        $product = Product::where('id', $id)->first();

        $programsCategories = ProductCategory::where('product_id', $id)->get()->all();

        $categories = new Collection;
        foreach ($programsCategories as $programsCategory) {
            $category = Category::where('id', $programsCategory->category_id)->first();
            $categories->push($category->name);
        }

        $photo_paths_table = $product->productsPhotosPaths;

        if ($photo_paths_table->isEmpty()) {
            $photo_paths_table->push('/storage/default.jpg');
            $paths = $photo_paths_table;
        } else {
            $paths = collect(null);
            foreach ($photo_paths_table as $photo_path_row) {
                $path = $photo_path_row->path;
                $path = substr($path, 7);
                $path = '/storage/'.$path;
                $paths->push($path);
            }
        }

        return view('/pages/product', ['product' => $product, 'categories' => $categories,
                     'photo_paths' => $paths]);
    }

    public function uploadPhoto(Request $request) {

        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public');
            $productPhotoPath = new ProductPhotoPath;
            $productPhotoPath->id = null;
            $productPhotoPath->path = $path;
            $productPhotoPath->product_id = $request->id;
            $productPhotoPath->save();
        }

        return $this->getProduct($request->id);
    }
}
