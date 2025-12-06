<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ---------------------------------------------------------
// RUTAS ESTÁTICAS PARA CURSO_MATERIA
// ---------------------------------------------------------

Route::view('/curso_materia.asignar_docente', 'curso_materia.asignar_docente')->name('curso_materia.asignar_docente');
Route::view('/curso_materia.baja_materias', 'curso_materia.baja_materias')->name('curso_materia.baja_materias');
Route::view('/curso_materia.editar_informacion', 'curso_materia.editar_informacion')->name('curso_materia.editar_informacion');
Route::view('/curso_materia.listar_materias', 'curso_materia.listar_materias')->name('curso_materia.listar_materias');

require __DIR__.'/auth.php';
