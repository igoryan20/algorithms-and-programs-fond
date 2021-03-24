<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function creators() {
        return $this->belongsToMany(User::class, 'news_creators', 'new_id', 'creator_id');
    }
}
