<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('dashboard');
}); *//* auth.login */

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */

Route::resource('home', HomeController::class);
Route::resource('blog', BlogController::class);
Route::resource('equipo', EquipoController::class);
