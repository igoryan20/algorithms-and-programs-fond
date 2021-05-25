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
        

        return view('pages/developers-requests', ['requests' => $requests]);
    }

    public function createRequest($id) {
        $user = User::find($id);
        $request = new RequestForDeveloperStatus;
        $request->user_id = $id;
        $request->status = 'Создан';
        $request->save();
        $request->refresh();

        $user->dev_status_request = $request->id;
        $user->save();

        return (new ProfileController)->getProfilePage();
    }
}
