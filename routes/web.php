<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/library', [LibraryController::class,'index'])->name('book.index');

Route::get('/library/create', [LibraryController::class,'create'])->name('book.create');

Route::get('/library/{book}',[LibraryController::class,'show'] )->name('book.show');

Route::post('/library',[LibraryController::class,'store'] )->name('book.store');

Route::delete('/library/{book}',[LibraryController::class,'destroy'] )->name('book.destroy');

Route::get('/library/{book}/edit', [LibraryController::class,'edit'])->name('book.edit'); 
Route::put('/library/{book}', [LibraryController::class,'update'])->name('book.update');    
