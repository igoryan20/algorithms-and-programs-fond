<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\{
    Product,
    Category,
    OperationSystem
};
use Illuminate\Pagination\LengthAwarePaginator;

class FilterProductsController extends Controller
{

    private $search;

    public function getFilteredProducts(Request $request) {
        
        $allCategories = Category::all();
        $allOperationSystems = OperationSystem::all();


        $products_id = $request->products_id;

        // Определяю критерии поиска
        $search = $request->search;
        $categoriesId = $request->checkbox_category;
        $operationSystems = $request->checkbox_os;

        // Создаю коллекцию
        $products = $this->createProductsCollection($products_id);

        // Ищу совпадения
        $searchedProducts = $this->getSearchedProducts($products, $search);
        $categorisatedProducts = $this->getCategorisatedProducts($searchedProducts, $categoriesId);
        $lastFilterProducts = $this->getProductsWithOS($categorisatedProducts, $operationSystems);

        if (!is_null($lastFilterProducts)) {
            $productsCount = count($lastFilterProducts);
        } else {
            $productsCount = 0;
        }
        
        
        return view('/pages/products-with-search', ['products' => $lastFilterProducts, 'categories' => $allCategories,
                                        'operationSystems' => $allOperationSystems, 'checkedCategories' => collect($categoriesId),
                                        'checkedOperationSystems' => collect($operationSystems), 'productsCount' => $productsCount,
                                        'title' => 'Найденные продукты']);
    }

    private function createProductsCollection($products_id) {
        
        if(!is_null($products_id)) {
            $products = new Collection();
            foreach($products_id as $id) {
                $products->push(Product::find($id));
            }
            return $products;
        } else {
            return new Collection;
        }

        
    }

    private function getSearchedProducts ($products, $search) {

        if(!is_null($products) && !is_null($search)) {
            $fproducts = new Collection();
            foreach($products as $product) {
                $pattern = '/^.*'.$search.".*$/i";
                if(preg_match($pattern, $product->name) || preg_match($pattern, $product->description)) {
                    $fproducts->push($product);
                }
            }
            return $fproducts;  
        } else {
            return $products;
        }     
    }

    private function getCategorisatedProducts ($products, $chosenCategoriesId) {
        
        if(!is_null($products) && !is_null($chosenCategoriesId)) {
            $cProducts = new Collection();
            foreach($products as $product) {
                $categoriesId = [];
                foreach($product->categories as $category) {
                    array_push($categoriesId, $category->id);
                }
                $isInArray = false;
                foreach($categoriesId as $categoryId) {
                    if (in_array($categoryId, $chosenCategoriesId)) {
                        $isInArray = true;
                    }
                }
                if ($isInArray) {
                    $cProducts->push($product);
                }
            }
            return $cProducts;
        } else {
            return $products;
        }   
    }

    private function getProductsWithOS ($products ,$chosenOsId) {
        if(!is_null($products) && !is_null($chosenOsId)) {
            $osProducts = new Collection();
            foreach($products as $product) {
                $osIds = [];
                foreach($product->operationSystems as $operationSystem) {
                    array_push($osIds, $operationSystem->id);
                }
                $isInArray = false;
                foreach($osIds as $osId) {
                    if (in_array($osId, $chosenOsId)) {
                        $isInArray = true;
                    }
                }
                if ($isInArray) {
                    $osProducts->push($product);
                }
            }
            return $osProducts;
        } else {
            return $products;
        }   
    }
}
