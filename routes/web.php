<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('option_2.index'); })->name('index');
Route::prefix('intensive')->group(function(){
    Route::get('/happy_team', function () { return view('option_2.intensive.happy_team'); })->name('happy_team');
    Route::get('/management', function () { return view('option_2.intensive.management'); })->name('management');
    Route::get('/effective_recruting', function () { return view('option_2.intensive.effective_recruting'); })->name('effective_recruting');
});
Route::get('/contact', function () {
    return view('option_2.contact');
})->name('contact');
