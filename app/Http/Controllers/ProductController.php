<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
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

        // Получаю продукт с переданным id
        $product = Product::where('id', $id)->first();

        // Получаю категории и фото с других таблиц
        $categories = $product->categories;
        $photosPaths = $product->photosName;

        // Если фото нет, создаю фото по умолчанию
        if($photosPaths->isEmpty()) {
            $photosPaths = collect([(object) ['name' =>  '/product-photos/default.jpg']]);
        }

        // Просматриваю желаемый продукт или нет
        $desireProducts = $product->users;
        $isDesired = $desireProducts->contains(function ($item, $key) {
            return $item->id == Auth::user()->id;
        });

        return view('/pages/product', ['product' => $product, 'categories' => $categories,
                     'photo_paths' => $photosPaths, 'isDesired' => $isDesired]);
    }

    public function uploadPhoto(Request $request) {

        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('product-photos');
            $productPhotoPath = new ProductPhotoPath;
            $productPhotoPath->id = null;
            $productPhotoPath->name = '/'.$path;
            $productPhotoPath->product_id = $request->id;
            $productPhotoPath->save();
        }

        return $this->getProduct($request, $request->id);
    }

    public function updateDesireProductTable(Request $request, $id) {

        if ($request->btn == 'add') {
            $desireProductUser = new DesiredProductUser;
            $desireProductUser->user_id = Auth::user()->id;
            $desireProductUser->product_id = $id;
            $desireProductUser->save();
        }
        if ($request->btn == 'del') {
            DesiredProductUser::where('user_id', Auth::user()->id)->where('product_id', $id)->delete();
        }

        return $this->getProduct($request, $id);
    }

    public function publish(Request $request, $id) {

        $product = Product::find($id);
        $product->is_published = true;
        $product->save();

        return view('/pages/success', ['title' => 'Успешно опубликовано', 'info' => 'Продукт успешно опубликован', 'id' => $id]);
    }

}
