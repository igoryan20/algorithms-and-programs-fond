<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Category,
    User
};

class HeaderController extends Controller
{
    static function getCategories() {
        return Category::take(5)->get();
    }

    static function getUsername() {
        return User::where('id', 6)->first()->username;
    }
}
