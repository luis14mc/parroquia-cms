<?php

declare(strict_types=1);

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DimensionesController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionesController;
use App\Http\Controllers\IntencionesController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PastoralesController;
use App\Http\Controllers\SacramentosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas del sitio web estático de la Parroquia.
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/nosotros', NosotrosController::class)->name('nosotros');

// Sacramentos — landing + individuales
Route::get('/sacramentos', [SacramentosController::class, 'index'])->name('sacramentos');
Route::get('/sacramentos/{sacramento}', [SacramentosController::class, 'show'])->name('sacramentos.show');

// Dimensiones — solo vistas individuales
Route::get('/dimensiones/{dimension}', [DimensionesController::class, 'show'])->name('dimensiones.show');

// Pastorales — solo vistas individuales
Route::get('/pastorales/{pastoral}', [PastoralesController::class, 'show'])->name('pastorales.show');

Route::get('/donaciones', DonacionesController::class)->name('donaciones');
Route::get('/contacto', ContactoController::class)->name('contacto');

// Noticias — listado + detalle
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');
Route::get('/noticias/{slug}', [NoticiasController::class, 'show'])->name('noticias.show');

// Intenciones de Misa — página informativa
Route::get('/intenciones', IntencionesController::class)->name('intenciones');

// Inscripciones — página informativa
Route::get('/inscripciones', InscripcionesController::class)->name('inscripciones');
