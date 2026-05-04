<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Sitio estático (Parroquia Cristo Resucitado)
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/donaciones', 'donaciones')->name('donaciones');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/intenciones', 'intenciones')->name('intenciones');
Route::view('/inscripciones', 'inscripciones')->name('inscripciones');
Route::view('/noticias', 'noticias')->name('noticias');

Route::get('/noticias/{slug}', fn (string $slug) => view('noticias.show', ['slug' => $slug]))->name('noticias.show');

Route::view('/sacramentos', 'sacramentos.index')->name('sacramentos');
Route::view('/sacramentos/bautismo', 'sacramentos.bautismo')->name('sacramentos.show.bautismo');
Route::view('/sacramentos/eucaristia', 'sacramentos.eucaristia')->name('sacramentos.show.eucaristia');
Route::view('/sacramentos/confirmacion', 'sacramentos.confirmacion')->name('sacramentos.show.confirmacion');
Route::view('/sacramentos/matrimonio', 'sacramentos.matrimonio')->name('sacramentos.show.matrimonio');
Route::view('/sacramentos/reconciliacion', 'sacramentos.reconciliacion')->name('sacramentos.show.reconciliacion');
Route::view('/sacramentos/uncion-de-enfermos', 'sacramentos.uncion-de-enfermos')->name('sacramentos.show.uncion-de-enfermos');

Route::view('/dimensiones/samaritana', 'dimensiones.samaritana')->name('dimensiones.show.samaritana');
Route::view('/dimensiones/comunidades', 'dimensiones.comunidades')->name('dimensiones.show.comunidades');
Route::view('/dimensiones/pascual', 'dimensiones.pascual')->name('dimensiones.show.pascual');
Route::view('/dimensiones/misionera', 'dimensiones.misionera')->name('dimensiones.show.misionera');

Route::view('/pastorales/familiar', 'pastorales.familiar')->name('pastorales.show.familiar');
Route::view('/pastorales/juvenil', 'pastorales.juvenil')->name('pastorales.show.juvenil');
Route::view('/pastorales/medios', 'pastorales.medios')->name('pastorales.show.medios');
Route::view('/pastorales/vocacional', 'pastorales.vocacional')->name('pastorales.show.vocacional');
Route::view('/pastorales/infantil', 'pastorales.infantil')->name('pastorales.show.infantil');
Route::view('/pastorales/duelo', 'pastorales.duelo')->name('pastorales.show.duelo');
