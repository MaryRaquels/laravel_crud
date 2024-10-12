<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
Route::post('/livros/{livro}', [LivroController::class, 'show'])->name('livros.show');
Route::get('/livros/{livro}/edit', [LivroController::class, 'edit'])->name('livros.edit');
Route::put('/livros/{livro}', [LivroController::class, 'update'])->name('livros.update');
Route::delete('/livros/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');
