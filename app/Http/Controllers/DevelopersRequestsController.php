<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForDeveloperStatus;
use App\Models\User;
use Illuminate\Support\Facades\Route;


class DevelopersRequestsController extends Controller
{
    public function getRequests() {

        $requests = RequestForDeveloperStatus::all();
        $requests->each(function ($request, $key) {
            $request->status = 'Просмотрен';
            $request->save();
        });

        // $users = User::whereIn('id', )

        return view('pages/developers-requests', ['requests' => $requests]);
    }

    public function createRequest($id) {
        $request = new RequestForDeveloperStatus;
        $request->user_id = $id;
        $request->status = 'Создан';
        $request->save();
        return (new ProfileController)->getProfilePage();
    }
}
