<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\{
    Category,
    Product 
};

class CreateProductController extends Controller
{
    public function getCreateProductPage() {

        $categories = Category::all();

        return view('pages/сreate-product-page', ['categories'  => $categories]);
    }

    public function postNewProduct(Request $request) {

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->full_description = $request->full_description;
        $product->developed_by = Auth::user()->id;
        $product->is_published = false;

        if($request->hasFile('avatar')) {
            $path = Storage::putFile('product-avatars', $request->file('avatar'));
            $product->img_path = '/'.$path;
        } else {
            $product->img_path = null;
        }
        $product->save();

        return view('/pages/success', ['title' => 'Успешно создан', 'info' => 'Продукт успешно создан', 'id' => $product->id]);
    }
}
