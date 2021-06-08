<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersListController extends Controller
{
    public function getUsers() {

        $users = User::all();

        return view('/pages/users-list', ["users" => $users]);
    }
}
