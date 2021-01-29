<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function getProgramsCount() {
        return ProgramsList::all()->count();
    }

    public function releases() {
        return $this->hasMany(Release::class, 'fk_programs', 'program_id');
    }

    public function productsPhotosPaths() {
        return $this->hasMany(ProductPhotoPath::class, 'product_id');
    }
}
