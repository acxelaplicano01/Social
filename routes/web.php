<?php

use App\Livewire\MiMuro\MiMuro;
use App\Livewire\Publicacion\Publicaciones;
use Illuminate\Support\Facades\Route;


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
    Route::get('/publicacion', Publicaciones::class)->name('publicacion');

    Route::get('/mimuro', MiMuro::class)->name('mimuro');
});
