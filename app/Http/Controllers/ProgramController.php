<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        if (!empty($program)) {
            $result = json_encode([
                'result' => true,
                'program' => $program,
                'url' => route('t_1', ['program' => $program])
            ]);
        } else {
            $result = json_encode(['result' => false]);
        }

        return $result;
    }
}

