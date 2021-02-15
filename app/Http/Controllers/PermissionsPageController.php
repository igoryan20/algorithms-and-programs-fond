<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionsPageController extends Controller
{
    public function getPermissions() {
        $permissions = Permission::all();
        return view('/pages/permissions', ['permissions' => $permissions]);
    }


}
