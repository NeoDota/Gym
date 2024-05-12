<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProductoController;
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
Route::resource('producto', ProductoController::class);
Route::resource('member', MemberController::class);
Route::resource('pay', PayController::class);