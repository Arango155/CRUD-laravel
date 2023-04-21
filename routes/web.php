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
Route::get('/',[\App\Http\Controllers\PersonasController::class,'index'])->name('inicio');

Route::get('/create',[\App\Http\Controllers\PersonasController::class,'create'])->name('create');

Route::get('/edit/{id}',[\App\Http\Controllers\PersonasController::class,'edit'])->name('edit');
Route::put('/update1/{id}',[\App\Http\Controllers\PersonasController::class,'update1'])->name('update1');

Route::get('/delete/{id}',[\App\Http\Controllers\PersonasController::class,'delete'])->name('delete');

Route::delete('/destroy/{id}',[\App\Http\Controllers\PersonasController::class,'destroy'])->name('destroy');

Route::post('/add',[\App\Http\Controllers\PersonasController::class,'add'])->name('add');

