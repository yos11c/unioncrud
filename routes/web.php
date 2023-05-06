<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [\App\Http\Controllers\PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [\App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [\App\Http\Controllers\PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [\App\Http\Controllers\PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [\App\Http\Controllers\PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [\App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');


