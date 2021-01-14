<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForDeveloperStatus;


class DevelopersRequestsController extends Controller
{
    public function getRequests() {

        return view('pages/developers-requests', ['requests' => (new RequestForDeveloperStatus)->getInfo()]);
    }

}
