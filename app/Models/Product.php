<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getProgramsCount() {
        return $this->all()->count();
    }

    public function releases() {
        return $this->hasMany(Release::class, 'fk_programs', 'product_id');
    }

    public function productsPhotosPaths() {
        return $this->hasMany(ProductPhotoPath::class, 'product_id');
    }

    public function operationSystems() {
        return $this->belongsToMany(OperationSystem::class, 'product_operation_system');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
