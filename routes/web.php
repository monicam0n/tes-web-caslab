<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;


Route::get('/', [TugasController::class, 'index'])->name('tugas.index');
Route::get('/tugas/create', [TugasController::class, 'create'])->name('tugas.create');
Route::post('/tugas', [TugasController::class, 'store'])->name('tugas.store');
Route::get('/tugas/{tugas}', [TugasController::class, 'show'])->name('tugas.show');
Route::get('/tugas/{tugas}/edit', [TugasController::class, 'edit'])->name('tugas.edit');
Route::post('/tugas/{tugas}/update', [TugasController::class, 'update'])->name('tugas.update');
Route::delete('/tugas/{tugas}/delete', [TugasController::class, 'delete'])->name('tugas.delete');
