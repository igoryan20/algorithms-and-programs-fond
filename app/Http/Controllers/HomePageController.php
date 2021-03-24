<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Product,
    Category,
    OperationSystem
};
use App\Http\Controllers\{
    Controller,
    SearchProgramController,
    CheckboxOsConroller,
    CheckboxCategoryConroller
};

class HomePageController extends Controller
{
    public function getAllProducts(Request $request) {

        $operationSystems = OperationSystem::all();
        $categories = Category::all();
        $products = Product::all();

        return view('/pages/home-page', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection] );
    }

    public function getFilteredProducts(Request $request) {

        $allProducts = Product::all();

        $search = $request->search;
        $categories = $request->checkbox_category;
        $operationSystems = $request->checkbox_os;

        if ($search) {
            $filteredProducts = Product::where('name', 'like', '%'.$search.'%')
                                        ->orWhere('description', 'like', '%'.$search.'%')->get();
        } else {
            $filteredProducts = $allProducts;
        }
        if ($categories) {
            $categoriesProducts = new Collection;
            foreach ($allProducts as $product) {
                foreach ($product->categories as $productCategory) {
                    if(in_array($productCategory->id, $categories)) {
                        $categoriesProducts->push($product);
                        break;
                    }
                }
            }
            $filteredProducts = $filteredProducts->intersect($categoriesProducts);
        }
        if ($operationSystems) {
            $operationSystemsProducts = new Collection;
            foreach ($allProducts as $product) {
                foreach ($product->operationSystems as $productOperationSystem) {
                    if(in_array($productOperationSystem->id, $operationSystems)) {
                        $operationSystemsProducts->push($product);
                        break;
                    }
                }
            }
            $filteredProducts = $filteredProducts->intersect($operationSystemsProducts);
        }

        $allOperationSystems = OperationSystem::all();
        $allCategories = Category::all();

        $categories = collect($categories);
        $operationSystems = collect($operationSystems);

        return view('/pages/home-page', ['products' => $filteredProducts, 'categories' => $allCategories,
                                        'operationSystems' => $allOperationSystems, 'checkedCategories' => $categories,
                                        'checkedOperationSystems' => $operationSystems]);
    }
}
?>
