<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Models\{
    Product,
    ProductCategory,
    Category,
    ProductPhotoPath,
    User,
    DesiredProductUser
};

class ProductController extends Controller
{
    public function getProduct(Request $request, $id) {

        $product = Product::where('id', $id)->first();

        $programsCategories = ProductCategory::where('product_id', $id)->get()->all();

        $categories = new Collection;
        foreach ($programsCategories as $programsCategory) {
            $category = Category::where('id', $programsCategory->category_id)->first();
            $categories->push($category->name);
        }

        $photoPathsTable = $product->productsPhotosPaths;

        if ($photoPathsTable->isEmpty()) {
            $photoPathsTable->push('/storage/default.jpg');
            $paths = $photoPathsTable;
        } else {
            $paths = collect(null);
            foreach ($photoPathsTable as $photoPathRow) {
                $path = $photoPathRow->path;
                $path = substr($path, 7);
                $path = '/storage/'.$path;
                $paths->push($path);
            }
        }

        $desireProducts = $product->users;
        $isDesired = false;
        foreach ($desireProducts as $desireProduct) {
            if($desireProduct->id == session('user_id')) {
                $isDesired = true;
            }
        }

        return view('/pages/product', ['product' => $product, 'categories' => $categories,
                     'photo_paths' => $paths, 'isDesired' => $isDesired]);
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

    public function updateDesireProductTable(Request $request, $id) {

        if ($request->btn == 'add') {
            $desireProductUser = new DesiredProductUser;
            $desireProductUser->user_id = session('user_id');
            $desireProductUser->product_id = $id;
            $desireProductUser->save();
        }
        if ($request->btn == 'del') {
            DesiredProductUser::where('user_id', session('user_id'))->where('product_id', $id)->delete();
        }

        return $this->getProduct($request, $id);
    }
}
