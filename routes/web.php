<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReticulaController;

Route::get('/catalogos', function(){
    return view ('catalogos');
})->middleware("auth") ->name("catalogos");

Route::get('/horarios', function(){
    return view ('horarios');
})->middleware("auth") ->name("horarios");

Route::get('/proyectos', function(){
    return view ('proyectos');
})->middleware("auth") ->name("proyectos");

Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
    Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
    Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
    Route::get('/Puestos.editar/{puesto}', [PuestoController::class, 'edit'])->name('puestos.editar');
    Route::get('/Puestos.ver/{puesto}', [PuestoController::class, 'show'])->name('puestos.ver');
    Route::post('/Puestos.eliminar/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.eliminar');
    Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
    
    Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
    Route::get('/Plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
    Route::post('/Plazas.store', [PlazaController::class, 'store'])->name('plazas.store');
    Route::get('/Plazas.editar/{plaza}', [PlazaController::class, 'edit'])->name('plazas.editar');
    Route::get('/Plazas.ver/{plaza}', [PlazaController::class, 'show'])->name('plazas.ver');
    Route::post('/Plazas.eliminar/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.eliminar');
    Route::post('/Plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');




Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('Alumnos.create');
    Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('Alumnos.store');
    Route::get('/Alumnos2.editar/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.editar');
    Route::get('/Alumnos2.ver/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.ver');
    Route::post('/Alumnos2.eliminar/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.eliminar');
    Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');

    Route::get('/Deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
    Route::get('/Deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
    Route::post('/Deptos.store', [DeptoController::class, 'store'])->name('deptos.store');
    Route::get('/Deptos.editar/{depto}', [DeptoController::class, 'edit'])->name('deptos.editar');
    Route::get('/Deptos.ver/{depto}', [DeptoController::class, 'show'])->name('deptos.ver');
    Route::post('/Deptos.eliminar/{depto}', [DeptoController::class, 'destroy'])->name('deptos.eliminar');
    Route::post('/Deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');

    Route::get('/Periodos.index', [PeriodoController::class, 'index'])->name('periodos.index');
    Route::get('/Periodos.create', [PeriodoController::class, 'create'])->name('periodos.create');
    Route::post('/Periodos.store', [PeriodoController::class, 'store'])->name('periodos.store');
    Route::get('/Periodos.editar/{periodo}', [PeriodoController::class, 'edit'])->name('periodos.editar');
    Route::get('/Periodos.ver/{periodo}', [PeriodoController::class, 'show'])->name('periodos.ver');
    Route::post('/Periodos.eliminar/{periodo}', [PeriodoController::class, 'destroy'])->name('periodos.eliminar');
    Route::post('/Periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('periodos.update');

    Route::get('/Carreras.index', [CarreraController::class, 'index'])->name('carreras.index');
    Route::get('/Carreras.create', [CarreraController::class, 'create'])->name('carreras.create');
    Route::post('/Carreras.store', [CarreraController::class, 'store'])->name('carreras.store');
    Route::get('/Carreras.editar/{carrera}', [CarreraController::class, 'edit'])->name('carreras.editar');
    Route::get('/Carreras.ver/{carrera}', [CarreraController::class, 'show'])->name('carreras.ver');
    Route::post('/Carreras.eliminar/{carrera}', [CarreraController::class, 'destroy'])->name('carreras.eliminar');
    Route::post('/Carreras.update/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');


    Route::get('/Reticulas.index', [ReticulaController::class, 'index'])->name('reticulas.index');
    Route::get('/Reticulas.create', [ReticulaController::class, 'create'])->name('reticulas.create');
    Route::post('/Reticulas.store', [ReticulaController::class, 'store'])->name('reticulas.store');
    Route::get('/Reticulas.editar/{reticula}', [ReticulaController::class, 'edit'])->name('reticulas.editar');
    Route::get('/Reticulas.ver/{reticula}', [ReticulaController::class, 'show'])->name('reticulas.ver');
    Route::post('/Reticulas.eliminar/{reticula}', [ReticulaController::class, 'destroy'])->name('reticulas.eliminar');
    Route::post('/Reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('reticulas.update');

    Route::get('/Materias.index', [MateriaController::class, 'index'])->name('materias.index');
    Route::get('/Materias.create', [MateriaController::class, 'create'])->name('materias.create');
    Route::post('/Materias.store', [MateriaController::class, 'store'])->name('materias.store');
    Route::get('/Materias.editar/{materia}', [MateriaController::class, 'edit'])->name('materias.editar');
    Route::get('/Materias.ver/{materia}', [MateriaController::class, 'show'])->name('materias.ver');
    Route::post('/Materias.eliminar/{materia}', [MateriaController::class, 'destroy'])->name('materias.eliminar');
    Route::post('/Materias.update/{materia}', [MateriaController::class, 'update'])->name('materias.update');


Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
