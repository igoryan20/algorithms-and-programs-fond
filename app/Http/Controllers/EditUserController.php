<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditUserController extends Controller
{
    public function getUserInfo($id) {

        $user = User::where('id', $id)->first();

        return view('pages/edit-user', ['user' => $user]);
    }

    public function updateUserInfo($id, Request $request) {

        $user = User::find($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;

        $user->save();

        return view('pages/edit-user', ['user' => $user]);
    }
}
