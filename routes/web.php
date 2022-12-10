<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/policy', function () {
    return view('policy');
})->name('policy');
Route::post('/send_feedback', function (Request $request) {
    dd($request);
})->name('sendFeedback');

Route::prefix('program')->group(function () {
    Route::get('/learning', function () {
        return view('program_learning', ['programs' => \App\Http\Controllers\ProgramController::list()]);
    })->name('learning');
});
