<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::fallback(function(){
    return "NDAK SOBOK";
});

Route::resource('mahasiswa', MahasiswaController::class);
