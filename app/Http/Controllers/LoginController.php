<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginPage() {

        $users = User::where('group_id', 1)->get();
        $developers = User::where('group_id', 2)->get();
        $admins = User::where('group_id', 3)->get();

        return view('/pages/login', ['users' => $users, 'developers' => $developers, 'admins' => $admins]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            var_dump('O yes');
            $request->session()->regenerate();
            return redirect()->route('/');
        } else {
            var_dump('O no');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.'
        ]);
    }
}
