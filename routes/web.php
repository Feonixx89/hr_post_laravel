<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('index');
Route::prefix('intensive')->group(function(){
    Route::get('/happy_team', function () { return view('intensive.happy_team'); })->name('happy_team');
    Route::get('/management', function () { return view('intensive.management'); })->name('management');
    Route::get('/effective_recruting', function () { return view('intensive.effective_recruting'); })->name('effective_recruting');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('send-mail', [MailController::class, 'index'])->name('sendMail');
Route::get('/policy', function () {
    return view('sections.policy');
})->name('policy');
