<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleado/crear', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleado', [EmpleadoController::class, 'store'])->name('empleados.store');
// Muestra el formulario para editar un empleado
Route::get('/empleado/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');

// Actualiza los datos del empleado
Route::put('/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');


Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');



