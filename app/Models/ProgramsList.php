<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramsList extends Model
{
    protected $table = 'programsList';

    public function getProgramsCount() {
        return ProgramsList::all()->count();
    }


}
