<?php

use App\Livewire\CreatePost;
use App\Livewire\Formulario;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Lazy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/dashboard', Formulario::class)
    //         ->name('dashboard')
    //         ->lazy(enabled: false);

    // Route::get('/dashboard', CreatePost::class)->name('dashboard');
    Route::view('prueba', 'prueba')->name('prueba');
});
