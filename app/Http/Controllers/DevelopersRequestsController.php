<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForDeveloperStatus;


class DevelopersRequestsController extends Controller
{
    public function getRequests() {

        $requests = new RequestForDeveloperStatus;
        $requestsInfo = $requests->getInfo();

        return view('pages/developers-requests', ['requests' => $requestsInfo]);
    }

}
