<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationSystem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'operation_systems';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function releases() {
        return $this->hasMany(Release::class, 'fk_os', 'os_id');
    }


}
