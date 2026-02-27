<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\IntencionController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PastoralController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/sacramentos', fn () => view('pages.sacramentos'))->name('sacramentos');
Route::get('/dimensiones', fn () => view('pages.dimensiones'))->name('dimensiones');

Route::get('/pastorales', [PastoralController::class, 'index'])->name('pastorales');
Route::get('/pastorales/{pastoral:slug}', [PastoralController::class, 'show'])->name('pastorales.show');

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');
Route::get('/noticias/{noticia:slug}', [NoticiaController::class, 'show'])->name('noticias.show');

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos');
Route::get('/eventos/{evento:slug}', [EventoController::class, 'show'])->name('eventos.show');

Route::get('/intenciones', [IntencionController::class, 'index'])->name('intenciones');

Route::get('/contacto', fn () => view('pages.contacto'))->name('contacto');
Route::get('/donaciones', fn () => view('pages.donaciones'))->name('donaciones');
