<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RequestForDeveloperStatus extends Model
{
    protected $table = 'requests_for_developer_status';
    
    public function user() {
        return $this->hasOne(User::class, 'dev_status_request');
    }
}
