<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property string $description
 * @property mixed $price
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
     * @return string
     */
    public static function create(Request $request): string
    {
        $program = new Programs();

        $program->name = $request->programName;
        $program->description = $request->description;
        $program->price = $request->programPrice;

        if ($program->save()) {
            return 'good';
        } else {
            return 'bad';
        }

    }
}
