<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PastoralController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\IntencionController;

// Pagina de inicio
Route::get('/', HomeController::class)->name('home');

// Paginas estaticas
Route::view('/sacramentos', 'pages.sacramentos')->name('sacramentos');
Route::view('/dimensiones', 'pages.dimensiones')->name('dimensiones');
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::view('/donaciones', 'pages.donaciones')->name('donaciones');

// Pastorales
Route::get('/pastorales', [PastoralController::class, 'index'])->name('pastorales');
Route::get('/pastorales/{pastoral}', [PastoralController::class, 'show'])->name('pastoral');

// Noticias
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticia');

// Actividades / Eventos
Route::get('/actividades', [EventoController::class, 'index'])->name('eventos');
Route::get('/actividades/{evento}', [EventoController::class, 'show'])->name('evento');

// Intenciones de misa
Route::get('/intenciones', [IntencionController::class, 'index'])->name('intenciones');
Route::post('/intenciones', [IntencionController::class, 'store'])->name('intenciones.store');
