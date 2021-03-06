<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CollectionHelper;

class Product extends Model
{
    // Возвращаю список опубликованных продуктов
    public static function published() {
        $products = (new static)->all();
        $products = $products->filter(function ($product, $key) {
            return $product->is_published;
        });
        return $products;
    }

    // Возвращаю список новых продуктов
    public static function new() {
        $products = (new static)->all();
        $products = $products->filter(function ($product) {
            return !$product->is_published;
        });
        return $products;
    }

    public static function paginateCollection($products, $ordersPerPage) {
        $paginatedProducts = CollectionHelper::paginate($products, $ordersPerPage);
        return $paginatedProducts;
    }

    public static function newCount() {
        $products = (new static)->all();
        return count(Product::new());
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
