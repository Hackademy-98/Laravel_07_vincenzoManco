<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

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
// Rotta homepage 
Route::get('/', [PublicController::class,'home'])->name('home');

// Rotta form
Route::get('/game/create', [GameController::class,'create'])->name('game.create');
Route::post('/game/store' , [GameController::class,'store'])->name('game.store');

// Rotte visualizzazione dati
Route::get('/games', [GameController::class,'index'])->name('game.index');
Route::get('/games/{game}',[GameController::class, 'show'])->name('game.show');

// Rotte per la modifica
Route::get('/game/edit/{game}', [GameController::class,'edit'])->name('game.edit');
Route::put('/game/update/{game}', [GameController::class,'update'])->name('game.update');

// rotta per la cancellazione 
Route::delete('/game/delete{game}',[GameController::class, 'destroy'])->name('game.destroy');