<?php

namespace App\Http\Controllers;

use App\Models\Intencion;

class IntencionController extends Controller
{
    public function index()
    {
        $intenciones = Intencion::publicadas()
            ->orderBy('fecha_misa')
            ->orderBy('created_at')
            ->paginate(20);

        return view('pages.intenciones', compact('intenciones'));
    }
}
