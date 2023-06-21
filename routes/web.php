<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;

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

Route::get('/', function () {
    return view('welcome');
});
// FACULTADES
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFacultades');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminarFacultad');
Route::get('/facultades/editar/{id}', [Facultades::class, 'viewEditar'])->name('viewEditarFacultad');
Route::post('/facultades/editar', [Facultades::class, 'editar'])->name('editarFacultad');

// PROGRAMAS
Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoProgramas');
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminarPrograma');
Route::get('/programas/registrar', [Programas::class, 'viewRegistrar'])->name('viewRegistrarPrograma');
Route::post('/programas/registrar', [Programas::class, 'registrar']);

// PROFESORES
Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProfesores');

Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);
Route::get('/calificaciones/listado', [Calificaciones::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'index']);






