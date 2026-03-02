<?php

declare(strict_types=1);

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DimensionesController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntencionesController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PastoralesController;
use App\Http\Controllers\SacramentosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas principales del CMS de la Parroquia.
| Usar controladores invocables para claridad y cache de rutas.
|
*/

// ── Maintenance Mode (descomentar para activar) ──
// Route::view('/', 'maintenance')->name('maintenance');

Route::get('/', HomeController::class)->name('home');
Route::get('/sacramentos', SacramentosController::class)->name('sacramentos');
Route::get('/pastorales', PastoralesController::class)->name('pastorales');
Route::get('/dimensiones', DimensionesController::class)->name('dimensiones');
Route::get('/noticias', NoticiasController::class)->name('noticias');
Route::get('/intenciones', IntencionesController::class)->name('intenciones');
Route::get('/donaciones', DonacionesController::class)->name('donaciones');
Route::get('/contacto', ContactoController::class)->name('contacto');
