<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RequestForDeveloperStatus extends Model
{
    protected $table = 'requests_for_developer_status';

    public function getInfo () {
        $requests = RequestForDeveloperStatus::all();

        $users_with_request = [];
        foreach ($requests as $request) {
            array_push($users_with_request, User::where('id', $request->user_id)->get());
        }
        return $users_with_request;
    }
}
