<?php

use App\Http\Controllers\costosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\empresariosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',DashboardController::class)->name('principal');

Route::get('/tarjetasEmpresarios', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('tarjetas.empresarios');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tarjetasEmpresarios/empresarios',[empresariosController::class,'index'])->middleware(['auth', 'verified'])->name('empresarios.index');
Route::get('/tarjetasEmpresarios/capturarRecarga',[empresariosController::class,'create'])->middleware(['auth', 'verified'])->name('recargas.create');


Route::get('/tarjetasEmpresarios/costos',[costosController::class,'index'])->middleware(['auth', 'verified'])->name('costos.update');


require __DIR__.'/auth.php';
