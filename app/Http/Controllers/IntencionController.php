<?php

namespace App\Http\Controllers;

use App\Models\Intencion;
use Illuminate\Http\Request;

class IntencionController extends Controller
{
    public function index()
    {
        return view('pages.intenciones');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo'               => ['required', 'in:difunto,enfermo,gratitud,otro'],
            'solicitante'        => ['required', 'string', 'max:120'],
            'nombre_beneficiario'=> ['required', 'string', 'max:180'],
            'fecha_misa'         => ['required', 'date', 'after_or_equal:today'],
            'comentario'         => ['nullable', 'string', 'max:500'],
        ]);

        Intencion::create($data);

        return back()->with('success', '¡Intención enviada! La presentaremos en la Misa del ' . \Carbon\Carbon::parse($data['fecha_misa'])->isoFormat('LL') . '.');
    }
}
