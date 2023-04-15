<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});
Route::get('/',[\App\Http\Controllers\PersonasController::class,'index'])->name('personas.index');

Route::get('/create',[\App\Http\Controllers\PersonasController::class,'index'])->name('personas.create');

Route::get('/edit',[\App\Http\Controllers\PersonasController::class,'index'])->name('personas.edit');

Route::get('/agregar',[\App\Http\Controllers\PersonasController::class,'index'])->name('personas.agregar');
