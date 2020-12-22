<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramsList;

class ProductController extends Controller
{
    public function getProduct($id) {

        $program = ProgramsList::where('id', $id)->first();

        return view('/pages/product', ['program' => $program]);
    }
}
