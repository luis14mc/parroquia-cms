<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\TallerSolidaridadRegistro;
use Illuminate\View\View;

final class TallerSolidaridadRegistrosPublicController extends Controller
{
    /**
     * Listado público por URL conocida (sin login). No enlazar desde el sitio.
     */
    public function index(): View
    {
        $registros = TallerSolidaridadRegistro::query()
            ->orderByDesc('created_at')
            ->paginate(50);

        return view('forms.taller-solidaridad-registros', [
            'registros' => $registros,
        ]);
    }
}
