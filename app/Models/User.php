<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Foundation\Auth\User
{
    public function getUsersCount() {
        return User::where('group_id', 1)->count();
    }

    public function getDevelopersCount() {
        return User::where('group_id', 2)->count();
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'desired_products_users');
    }

    public function contacts() {
        return $this->hasOne(UserContacts::class);
    }

    public function requestForDeveloperStatus() {
        return $this->hasOne(RequestForDeveloperStatus::class);
    }
}
