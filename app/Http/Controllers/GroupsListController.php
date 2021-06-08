<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupsListController extends Controller
{
    public function getGroups() {

        $groups = Group::all();

        return view('pages/groups-list', ['groups' => $groups]);
    }
}
