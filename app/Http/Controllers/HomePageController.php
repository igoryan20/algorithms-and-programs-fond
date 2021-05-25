<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $products = Product::latest()->paginate(10);

        return view('/pages/home-page', ['products' => $products, 'categories' => $categories,
                                         'operationSystems' => $operationSystems, 'checkedCategories' => new Collection,
                                         'checkedOperationSystems' => new Collection] );
    }

    public function getFilteredProducts(Request $request) {

        // Определяю критерии поиска
        $search = $request->search;
        $categoriesId = $request->checkbox_category;
        $operationSystems = $request->checkbox_os;

        // Ищу совпадения в поисковой строке
        if($search) {
            $searchedProducts = $this->getSearchedProducts($search);
        } else {
            $searchedProducts = Product::all();
        }

        // Ищу совпадения по категориям
        if($categoriesId) {
            $categorisatedProducts = $this->getCategorisatedProducts($categoriesId);
        } else {
            $categorisatedProducts = Product::all();
        }        
        
        // Ищу совпадения по операционным системам
        if($operationSystems) {
            $productsWithOS = $this->getProductsWithOS($operationSystems);
        } else {
            $productsWithOS = Product::all();
        }
        
        // Исплользую пересечения найденых продуктов
        $firstFilterProducts = $searchedProducts->intersect($categorisatedProducts);
        $lastFilterProducts = $firstFilterProducts->intersect($productsWithOS);
        
        $filteredProducts = new LengthAwarePaginator($lastFilterProducts, count($lastFilterProducts), 10);



        $allOperationSystems = OperationSystem::all();
        $allCategories = Category::all();

        $categories = collect($categoriesId);
        $operationSystems = collect($operationSystems);

        return view('/pages/home-page', ['products' => $filteredProducts, 'categories' => $allCategories,
                                        'operationSystems' => $allOperationSystems, 'checkedCategories' => $categories,
                                        'checkedOperationSystems' => $operationSystems]);
    }

    private function getSearchedProducts ($search) {
        return Product::where('name', 'like', '%'.$search.'%')
                        ->orWhere('description', 'like', '%'.$search.'%')->latest()->paginate(10);
       
    }

    private function getCategorisatedProducts ($categoriesId) {
        $categories = Category::whereIn('id', $categoriesId)->get();
        $products = [];
        foreach($categories as $category) {
            foreach($category->products as $product) {
                array_push($products, $product);
            }
        }
        
        return collect($products)->sortByDesc('id');
    }

    private function getProductsWithOS ($osId) {
        $operationSystems = OperationSystem::whereIn('id', $osId)->get();
        $products = [];
        foreach($operationSystems as $operationSystem) {
            foreach($operationSystem->products as $product) {
                array_push($products, $product);
            }
        }
        
        return collect($products)->sortByDesc('id');
    }

    public function changeUser(Request $request) {
        session(['user_id' => $request->user_id]);
    
        return $this->getAllProducts($request);
    }
}
?>
