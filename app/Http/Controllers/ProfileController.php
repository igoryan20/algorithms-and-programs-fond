<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserContacts;

class ProfileController extends Controller
{
    public function getProfilePage() {

        $currentUser = Auth::user();

        return view('pages/profile', ["user" => $currentUser]);
    }

    public function createContacts(Request $request) {

        $user = Auth::user();
        $userContacts = new UserContacts;
        $userContacts->user_id = $user->id;
        $userContacts->phone = $request->phone;
        $userContacts->email = $request->email;
        $userContacts->address = $request->address;
        $userContacts->other = $request->other;
        $userContacts->save();

        return redirect('/profile');
    }

    public function updateContacts(Request $request) {

        $user = Auth::user();

        if(is_null($request->phone) && is_null($request->email) && is_null($request->address) && is_null($request->other)) {
            $userContacts = UserContacts::where('user_id', $user->id);
            $userContacts->delete();
        } else {
            UserContacts::where('user_id', $user->id)
            ->update(['phone' => $request->phone, 'email' => $request->email,
                    'address' => $request->address, 'other' => $request->other]);
        }    

        return redirect('/profile');
    }

    public function updateUserFullName(Request $request) {

        $user = Auth::user();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->save();

        return redirect('/profile');
    }

    public function updateUserAvatar(Request $request) {

        if($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('public');
            $path = str_replace('public', 'storage', $path);
            $user = Auth::user();
            $user->avatar_path = $path;
            $user->save();
        }

        return redirect('/profile');
    }
}
