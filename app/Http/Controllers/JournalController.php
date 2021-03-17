<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Release,
    Product
};

class JournalController extends Controller
{
    public function getRelises($id, Request $request) {

        $releases = Release::all()->where('product_id', $id);
        $product = Product::where('id', $id)->first();

        return view('/pages/journal', ['releases' => $releases, 'product' => $product]);
    }
}
