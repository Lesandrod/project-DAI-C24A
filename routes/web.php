<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\User;
use app\Http\Controllers\Pelicula;
use app\Http\Controllers\Membresia;
use app\Http\Controllers\Renta;
use app\Http\Controllers\Rentaadmin;
use app\Http\Controllers\Peliculaadmin;
use app\Http\Controllers\Membresiaadmin;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('inicio', 'App\Http\Controllers\HomeController@index')->name('inicio');
Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'perfil'])->name('perfil');

Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('pelicula', 'App\Http\Controllers\PeliculaController');
Route::resource('membresia', 'App\Http\Controllers\MembresiaController');
Route::resource('renta', 'App\Http\Controllers\RentaController');
Route::resource('rentaadmin', 'App\Http\Controllers\RentaadminController');
Route::resource('adminpelicula', 'App\Http\Controllers\PeliculaadminController');
Route::resource('membresiaadmin', 'App\Http\Controllers\MembresiaadminController');
