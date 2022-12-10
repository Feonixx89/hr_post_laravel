<?php

namespace App\Http\Controllers;

use App\Models\Programs;

class ProgramController extends Controller
{
    public static function list()
    {
        return Programs::all()->where('actual', true);
    }
}

