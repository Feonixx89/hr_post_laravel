<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property string $description
 */
class Programs extends Model
{
    protected $table = 'programs';

    /**
     * @return HasMany
     */
    public function compounds(): HasMany
    {
        return $this->hasMany(CompoundProgram::class, 'program_id', 'id');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $program = new Programs();

        $program->name = $request->programName;
        $program->description = $request->description;

        $program->save();
    }
}
