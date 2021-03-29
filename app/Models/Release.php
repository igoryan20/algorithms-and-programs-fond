<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Release extends Model
{

    public function create(Request $properties, string $path) {
        $this->id = null;
        $this->name = $properties->name;
        $this->description = $properties->description;
        $this->product_id = $properties->id;
        $this->path = $path;
        if($properties->Windows) {
            $this->os_id = 1;
        }
        if($properties->MacOS) {
            $this->os_id = 2;
        }
        if($properties->Linux) {
            $this->os_id = 3;
        }

        $this->save();
    }

    public function getReleasesCount() {
        return $this->all()->count();
    }

    public function product() {
        return $this->belognsTo(Product::class);
    }

    public function operationSystem() {
        return $this->belongsTo(OperationSystem::class);
    }
}
