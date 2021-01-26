<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    public function os() {
        return $this->belongsToMany(OS::class, 'release_os', 'release_id', 'os_id');
    }
}
