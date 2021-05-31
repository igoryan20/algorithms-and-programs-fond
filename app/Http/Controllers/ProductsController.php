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
    public function getAllProductsPage() {

        $products = Product::paginate(6);
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = Product::all()->count();

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Все продукты'] );
    }

    public function getNewProductsPage() {

        $products = Product::paginateCollection(Product::new(), 6);
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = Product::newCount();

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Новые продукты'] );
    }

    public function getPublishedProductsPage() {

        $products = Product::paginateCollection(Product::published(), 6);
        $categories = Category::all();
        $operationSystems = OperationSystem::all();
        $productsCount = Product::all()->count();

        return view('/pages/products-with-search', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection, 'productsCount' => $productsCount,
                                         'title' => 'Опубликованные продукты'] );
    }
}
