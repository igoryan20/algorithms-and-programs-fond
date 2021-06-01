<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\{
    Product,
    Category,
    OperationSystem
};

class ProductsController extends Controller
{
    public function getAllProductsPage(Request $request) {

        if ($request->search || $request->checkbox_category || $request->checkbox_os) {
            return (new FilterProductsController)->getFilteredProducts($request);
        }

        $products = Product::all();
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = Product::all()->count();

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Все продукты'] );
    }

    public function getNewProductsPage(Request $request) {

        if ($request->search || $request->checkbox_category || $request->checkbox_os) {
            return (new FilterProductsController)->getFilteredProducts($request);
        }

        $products = Product::new();
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = Product::newCount();

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Новые продукты'] );
    }

    public function getPublishedProductsPage(Request $request) {

        if ($request->search || $request->checkbox_category || $request->checkbox_os) {
            return (new FilterProductsController)->getFilteredProducts($request);
        }

        $products = Product::published();
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = count(Product::published());

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Опубликованные продукты'] );
    }

    public function getCategoryProducts(Request $request) {

        $category = Category::where('url', $request->path())->first();
        $products = $category->products;
        $productsCount = count($products);
        return view('/pages/products', ['products' => $products, 'productsCount' => $productsCount,
                                         'title' => 'Продукты в категории "'.$category->name.'"'] );
    }
}
