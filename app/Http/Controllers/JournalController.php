<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Release,
    product
};

class JournalController extends Controller
{
    public function getRelises($id, Request $request) {

        $releases = Release::all()->where('product_id', $id);
        $product = product::where('id', $id)->first();

        return view('/pages/journal', ['releases' => $releases, 'product' => $product]);
    }
}
