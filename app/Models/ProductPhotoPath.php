<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhotoPath extends Model
{
    protected $table = 'products_photos_paths';

    protected $id;
    protected $path;
    protected $program_id;

    public $timestamps = false;
}
