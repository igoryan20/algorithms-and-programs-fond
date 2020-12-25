<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProfileController extends Controller
{
    public function __invoke() {

        $current_user = User::where('id', 10)->first();

        return view('pages/profile', ["user" => $current_user]);
    }
}
