<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\{
    Product,
    ProductCategory,
    ProductOperationSystem,
    Category,
    ProductPhotoPath,
    User,
    DesiredProductUser
};

class ProductController extends Controller
{
    public function getProduct(Request $request, $id) {

        // Получаю продукт с переданным id
        $product = Product::find($id);

        $isReleasePublished = false;
        foreach ($product->releases as $release) {
            if($release->is_published == 1) {
                $isReleasePublished = true;
                break;
            }
        }

        // Получаю категорииб, фото и данные о разработчике с других таблиц
        $categories = $product->categories;
        $photosPaths = $product->photosName;
        $developer = User::find($product->developed_by);

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
                     'photo_paths' => $photosPaths, 'isDesired' => $isDesired, 'developer' => $developer, 'isReleasePublished' => $isReleasePublished]);
    }

    // Загружаю фото на сервер
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

    // Обновляю таблицу желаемого
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

    // Публикую продукт
    public function publish(Request $request, $id) {

        $product = Product::find($id);
        $product->is_published = true;
        $product->save();

        return view('/pages/success', ['title' => 'Успешно опубликовано', 'info' => 'Продукт успешно опубликован', 'id' => $id]);
    }

    // Обновляю описание продукта
    public function updateProductDescription(Request $request, $id) {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->full_description = $request->full_description;
        $product->save();

        return $this->getProduct($request, $id);
    }

    public function deleteProduct(Request $request, $id) {
        $product = Product::find($id);
        $avatarPath = $product->img_path;
        ProductCategory::where('product_id', $id)->delete();
        ProductOperationSystem::where('product_id', $id)->delete();
        $photosPaths = ProductPhotoPath::where('product_id', $id)->get();

        Storage::delete($avatarPath);
        foreach($photosPaths as $path) {
            Storage::delete($path->name);
        }

        ProductPhotoPath::where('product_id', $id)->delete();
        $product->delete();

        return view('pages/success', ['title' => 'Успешно удалено', 'id' => null, 'info' => 'Продукт успешно удален']);
    }
}
