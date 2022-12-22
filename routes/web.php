<?php

use App\Http\Controllers\ProgramController;
use App\Models\Programs;
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
      return view('program_learning', ['programs' => ProgramController::list()]);
    })->name('learning');
    Route::get('/create', function () {
        return view('programs.create');
    })->name('create');
    Route::post('/send', function (Request $request) {
        return ProgramController::send($request);
    })->name('sendDescriptionProgram');

    Route::post('/about/{id}', function (Programs $id){
        return view('programs.about', ['$program' => ProgramController::about($id)]);
    })->name('about');
});
