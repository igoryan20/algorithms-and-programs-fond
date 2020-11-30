<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HeaderController extends Controller
{
    static function getCategories() {
        return Categories::all();
    }
}
