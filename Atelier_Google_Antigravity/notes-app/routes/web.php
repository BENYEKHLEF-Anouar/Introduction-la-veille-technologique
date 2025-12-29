<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [NoteController::class, 'index'])->name('notes.index');
Route::post('/', [NoteController::class, 'store'])->name('notes.store');
Route::delete('/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');