<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Programs extends Model
{
    protected $table = 'programs';

    /**
     * @return HasMany
     */
    public function compounds(): HasMany
    {
        return $this->hasMany(CompoundProgram::class,'program_id', 'id');
    }
}
