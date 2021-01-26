<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramsList extends Model
{
    protected $table = 'programsList';

    public function getProgramsCount() {
        return ProgramsList::all()->count();
    }

    public function releases() {
        return $this->hasMany(Release::class, 'fk_programs', 'program_id');
    }


}
