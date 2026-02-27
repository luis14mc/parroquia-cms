<?php

namespace App\Http\Controllers;

use App\Models\Pastoral;

class PastoralController extends Controller
{
    public function index()
    {
        $pastorales = Pastoral::activas()->get();

        return view('pages.pastorales', compact('pastorales'));
    }

    public function show(Pastoral $pastoral)
    {
        if (!$pastoral->es_activa) {
            abort(404);
        }

        return view('pages.pastoral', compact('pastoral'));
    }
}
