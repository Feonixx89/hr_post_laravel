<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public static function list()
    {
        return Programs::all()->where('actual', true);
    }

    /**
     * @param Request $request
     * @return bool
     */
    public static function send(Request $request): bool
    {
        return Programs::create($request);
    }

    public static function about(Programs $program)
    {
        return view('programs.about')->with('program', $program);
    }
}

