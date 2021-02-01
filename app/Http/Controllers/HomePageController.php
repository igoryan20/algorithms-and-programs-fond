<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                                         'operationSystems' => $operationSystems] );
    }

    public function getFilteredProducts(Request $request) {

    }
}
?>
