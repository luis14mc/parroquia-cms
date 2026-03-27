<?php

namespace App\Http\Controllers;

use App\Models\DueloRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DueloRegistroController extends Controller
{
    public function index()
    {
        return view('campaña-duelo.registro');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'telefono'        => 'required|string|max:20',
            'email'           => 'nullable|email|max:255',
            'confirmar_asistencia' => 'required|in:0,1',
        ]);

        $registro = DueloRegistro::create([
            'nombre_completo'      => $validated['nombre_completo'],
            'telefono'             => $validated['telefono'],
            'email'                => $validated['email'] ?? null,
            'confirmar_asistencia' => (bool) $validated['confirmar_asistencia'],
        ]);

        Log::info('Nuevo registro congreso', ['id' => $registro->id, 'nombre' => $registro->nombre_completo]);

        return redirect()->route('campaña-duelo.gracias')->with([
            'nombre'    => $registro->nombre_completo,
            'telefono'  => $registro->telefono,
            'asistencia' => $registro->confirmar_asistencia,
        ]);
    }

    public function registros()
    {
        $registros = DueloRegistro::orderByDesc('created_at')->get();
        return response()->json([
            'total'     => $registros->count(),
            'db_driver' => config('database.default'),
            'db_host'   => config('database.connections.' . config('database.default') . '.host') ?? 'N/A',
            'registros' => $registros->map(fn ($r) => [
                'id'        => $r->id,
                'nombre'    => $r->nombre_completo,
                'telefono'  => $r->telefono,
                'email'     => $r->email,
                'asistencia' => $r->confirmar_asistencia ? 'Sí' : 'No',
                'fecha'     => $r->created_at?->format('d/m/Y H:i'),
            ]),
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function dbInfo()
    {
        try {
            DB::connection()->getPdo();
            $connected = true;
            $dbName    = DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            $connected = false;
            $dbName    = $e->getMessage();
        }

        return response()->json([
            'db_connection'  => config('database.default'),
            'db_host'        => env('DB_HOST', env('MYSQLHOST', 'no-host-var')),
            'db_port'        => env('DB_PORT', env('MYSQLPORT', 'no-port-var')),
            'db_database'    => env('DB_DATABASE', env('MYSQLDATABASE', 'no-db-var')),
            'db_username'    => env('DB_USERNAME', env('MYSQLUSER', 'no-user-var')),
            'mysql_url_set'  => !empty(env('MYSQL_URL')),
            'connected'      => $connected,
            'database_name'  => $dbName,
        ], 200, [], JSON_PRETTY_PRINT);
    }
}
