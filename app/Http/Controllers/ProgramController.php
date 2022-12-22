<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Exception;
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
        try {
            Programs::create($request);
            $result = true;
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }

}

