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
Route::delete('/destroy/{id}', [App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');

Route::get('/indext', [\App\Http\Controllers\TransporteController::class, 'indext'])->name('transportes.indext');
Route::get('/createt', [\App\Http\Controllers\TransporteController::class, 'createt'])->name('transportes.createt');
Route::post('/storet', [\App\Http\Controllers\TransporteController::class, 'storet'])->name('transportes.storet');
Route::get('/editt/{id}', [\App\Http\Controllers\TransporteController::class, 'editt'])->name('transportes.editt');
Route::put('/updatet/{id}', [\App\Http\Controllers\TransporteController::class, 'updatet'])->name('transportes.updatet');
Route::get('/showt/{id}', [\App\Http\Controllers\TransporteController::class, 'showt'])->name('transportes.showt');
Route::delete('/destroyt/{id}', [\App\Http\Controllers\TransporteController::class, 'destroyt'])->name('transportes.destroyt');

Route::get('/indexc', [\App\Http\Controllers\CamionController::class, 'indexc'])->name('camiones.indexc');
Route::get('/createc', [\App\Http\Controllers\CamionController::class, 'createc'])->name('camiones.createc');
Route::post('/storec', [\App\Http\Controllers\CamionController::class, 'storec'])->name('camiones.storec');
Route::get('/editc/{id}', [\App\Http\Controllers\CamionController::class, 'editc'])->name('camiones.editc');
Route::put('/updatec/{id}', [\App\Http\Controllers\CamionController::class, 'updatec'])->name('camiones.updatec');
Route::get('/showc/{id}', [\App\Http\Controllers\CamionController::class, 'showc'])->name('camiones.showc');
Route::delete('/destroyc/{id}', [\App\Http\Controllers\CamionController::class, 'destroyc'])->name('camiones.destroyc');

