<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Videogame\CreateVideogame;
use App\Livewire\Videogame\EditVideogame;
use App\Livewire\Videogame\IndexVideogames;
use App\Livewire\Videogame\ShowVideogame;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/videogames', IndexVideogames::class)->name('videogames.index');
    Route::get('/videogames/create', CreateVideogame::class)->name('videogames.create');
    Route::get('/videogames/{videogame}/edit', EditVideogame::class)->name('videogames.edit');
});



require __DIR__.'/auth.php';
