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

    static function getUsers() {
        return User::all();
    }

    static function getUsername($id) {
        return User::where('id', $id)->first()->username;
    }
}
