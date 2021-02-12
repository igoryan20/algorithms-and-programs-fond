<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Foundation\Auth\User
{
    public function getUsersCount() {
        return User::all()->count();
    }

    public function group() {
        return $this->hasOne(Group::class, 'users_ibfk_1');
    }
}
