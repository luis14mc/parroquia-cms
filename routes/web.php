<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| MODO MANTENIMIENTO
|--------------------------------------------------------------------------
| Todas las rutas redirigen a la página de mantenimiento mientras el
| sitio se encuentra en desarrollo.
|--------------------------------------------------------------------------
*/

Route::get('{any}', fn () => view('maintenance'))->where('any', '.*');
