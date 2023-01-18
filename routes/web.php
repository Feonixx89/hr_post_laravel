<?php

use App\Http\Controllers\ProgramController;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/policy', function () { return view('policy'); })->name('policy');

Route::post('/send_feedback', function (Request $request) { dd($request); })->name('sendFeedback');

Route::prefix('program')->group(function () {
    Route::get('/create', function () {
        return view('programs.create');
    })->name('create');

    Route::post('/send', function (Request $request) {
        return ProgramController::send($request);
    })->name('sendDescriptionProgram');

    Route::get('/about/{id}', function (Programs $id){
        return ProgramController::about($id);
    })->name('about');

    Route::get('/t_1', function(Programs $program){
        return view('programs.about', ['program' => $program]);
    })->name('t_1');

});

Route::prefix('intensive')->group(function(){
    Route::view('/happy_team', 'intensive.happy_team')->name('intensiveHappyTeam');
    Route::view('/management_1.0', 'intensive.management_1_0')->name('intensiveManagement_1_0');
    Route::view('/effective_recruiting', 'intensive.effective_recruiting', ['programs' => ProgramController::list()])
        ->name('intensiveEffectiveRecruiting');
});
