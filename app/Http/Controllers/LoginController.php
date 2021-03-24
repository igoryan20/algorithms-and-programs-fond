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

        if(User::where('id', $request->user_id)->first()) {
            $currentUser = User::where('id', $request->user_id)->first();
            if($currentUser) {
                $request->session()->regenerate();
                Auth::login($currentUser, $remember = true);
            }       
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                    'username' => 'The provided credentials do not match our records.'
                ]);
        } 
    }
}
