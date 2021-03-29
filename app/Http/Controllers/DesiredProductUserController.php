<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DesiredProductUserController extends Controller
{
    public function getUsers(Request $request, $product_id) {

        $users = Product::find($product_id)->users;
        
        return view('pages/desired-product-users', ['users' => $users]);
    }
}
