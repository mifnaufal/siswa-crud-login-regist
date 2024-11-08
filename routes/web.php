<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/register'); 
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('siswa', SiswaController::class);
    Route::get('/home', function() { 
        return redirect('/siswa');
    });
});