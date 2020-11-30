<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HeaderController extends Controller
{
    public function __invoke() {

        $categories = Categories::all();

        return view('components/header', ['categories' => $categories]);
    }
}
