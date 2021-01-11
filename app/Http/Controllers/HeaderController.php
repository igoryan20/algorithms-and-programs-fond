<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\User;

class HeaderController extends Controller
{
    static function getCategories() {
        return Categories::take(5)->get();
    }

    static function getUsername() {
        return User::where('id', 6)->first()->username;
    }
}
