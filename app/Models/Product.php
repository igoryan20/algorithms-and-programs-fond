<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    public function getProductsCount() {
        return $this->all()->count();
    }

    public function releases() {
        return $this->hasMany(Release::class);
    }

    public function photosName() {
        return $this->hasMany(ProductPhotoPath::class, 'product_id');
    }

    public function operationSystems() {
        return $this->belongsToMany(OperationSystem::class, 'product_operation_system');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'desired_products_users');
    }
}
