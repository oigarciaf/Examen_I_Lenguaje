<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Models\Contacto;

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
    return view('welcome');
});
Route::post('/directorio', [DirectorioController::class, 'store'])->name('directorio.store');
Route::get('/directorio/{id}', [DirectorioController::class, 'show'])->name('directorio.show');
Route::get('/directorio/{codigoEntrada}', [DirectorioController::class, 'show'])->name('directorio.show');
Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.index');
Route::get('/directorio/search', [DirectorioController::class, 'search'])->name('directorio.search');
Route::get('/crear-entrada', [DirectorioController::class, 'create'])->name('directorio.create');

Route::delete('/directorios/{codigoEntrada}', [DirectorioController::class, 'destroy'])->name('directorio.destroy');

Route::get('/directorios/{codigoEntrada}', [DirectorioController::class, 'eliminar'])->name('directorio.eliminar');


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/buscar-entrada', [DirectorioController::class, 'buscar'])->name('directorio.buscar');
Route::get('/buscar-entrada/resultados', [DirectorioController::class, 'buscarCorreo'])->name('directorio.buscarCorreo');
Route::get('/buscar-correo', [DirectorioController::class, 'buscarCorreo'])->name('directorio.buscarCorreo');

// Ruta para manejar la confirmación de eliminación de la entrada del directorio
Route::get('/directorios/{codigoEntrada}/confirmar-eliminacion', [DirectorioController::class, 'confirmarEliminacion'])->name('directorio.confirmarEliminacion');



Route::get('/directorios/{codigoEntrada}/agregar-contacto', [DirectorioController::class, 'agregarContactoForm'])->name('directorio.agregarContactoForm');
Route::get('/directorio/{codigoEntrada}', [DirectorioController::class, 'mostrarContacto'])->name('directorio.mostrarContacto');

Route::get('/agregar-contacto', [ContactoController::class, 'crearContactoForm'])->name('directorio.crearContactoForm');
Route::post('/agregar-contacto', [ContactoController::class, 'guardarContacto'])->name('directorio.guardarContacto');
Route::delete('/eliminar-contacto/{id}', [ContactoController::class, 'eliminarContacto'])->name('directorio.eliminarContacto');
Route::delete('/contacto/{id}', [ContactoController::class, 'eliminarContacto'])->name('contacto.eliminar');


Route::get('/', function () {
    return view('welcome');
});
/*
// Rutas para el controlador de Directorio
Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.index');
Route::get('/crear-entrada', [DirectorioController::class, 'create'])->name('directorio.create');
Route::post('/directorio', [DirectorioController::class, 'store'])->name('directorio.store');
Route::get('/directorio/{codigoEntrada}', [DirectorioController::class, 'show'])->name('directorio.show');
Route::delete('/directorio/{codigoEntrada}', [DirectorioController::class, 'destroy'])->name('directorio.destroy');
Route::get('/directorio/{codigoEntrada}/confirmar-eliminacion', [DirectorioController::class, 'confirmarEliminacion'])->name('directorio.confirmarEliminacion');
Route::get('/directorios/{codigoEntrada}/agregar-contacto', [DirectorioController::class, 'agregarContactoForm'])->name('directorio.agregarContactoForm');
Route::get('/directorio/{codigoEntrada}/mostrar-contacto', [DirectorioController::class, 'mostrarContacto'])->name('directorio.mostrarContacto');
Route::get('/buscar-entrada', [DirectorioController::class, 'buscar'])->name('directorio.buscar');
Route::get('/buscar-entrada/resultados', [DirectorioController::class, 'buscarCorreo'])->name('directorio.buscarCorreo');

// Rutas para el controlador de Contacto
Route::post('/agregar-contacto', [ContactoController::class, 'guardarContacto'])->name('contacto.guardarContacto');
Route::delete('/eliminar-contacto/{id}', [ContactoController::class, 'eliminarContacto'])->name('contacto.eliminarContacto');
*/
Route::get('/entradaNueva', function () {
    return view('crearEntrada');
});