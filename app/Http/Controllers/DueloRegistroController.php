<?php

namespace App\Http\Controllers;

use App\Models\DueloRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\ValidationException;

class DueloRegistroController extends Controller
{
    public function index()
    {
        return view('campaña-duelo.registro');
    }

    public function store(Request $request)
    {
        Log::info('congreso.store: petición recibida', [
            'session_driver' => config('session.driver'),
            'has_dias' => $request->filled('dias_asistencia'),
        ]);

        try {
            $validated = $request->validate([
                'nombre_completo' => 'required|string|max:255',
                'telefono' => 'required|string|max:20',
                'email' => 'nullable|email|max:255',
                'dias_asistencia' => 'required|array|min:1',
                'dias_asistencia.*' => 'in:sabado,domingo',
            ]);

            $registro = DueloRegistro::create([
                'nombre_completo' => $validated['nombre_completo'],
                'telefono' => $validated['telefono'],
                'email' => $validated['email'] ?? null,
                'dias_asistencia' => $validated['dias_asistencia'],
            ]);

            Log::info('Nuevo registro congreso', [
                'id' => $registro->id,
                'nombre' => $registro->nombre_completo,
                'driver' => config('database.default'),
                'database' => DB::connection()->getDatabaseName(),
            ]);

            return redirect()->route('congreso.gracias')->with([
                'nombre' => $registro->nombre_completo,
                'telefono' => $registro->telefono,
                'dias' => $registro->dias_asistencia,
            ]);
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Throwable $e) {
            Log::error('congreso registro: error al guardar', [
                'message' => $e->getMessage(),
                'file' => $e->getFile().':'.$e->getLine(),
            ]);

            return back()
                ->withInput()
                ->withErrors([
                    'db' => 'No se pudo guardar el registro. Intente de nuevo o contacte a la parroquia. Si el problema continúa, el administrador del sitio debe verificar las migraciones de la base de datos.',
                ]);
        }
    }

    public function registros()
    {
        $registros = DueloRegistro::orderByDesc('created_at')->get();

        return response()->json([
            'total' => $registros->count(),
            'db_driver' => config('database.default'),
            'db_host' => config('database.connections.'.config('database.default').'.host') ?? 'N/A',
            'registros' => $registros->map(fn ($r) => [
                'id' => $r->id,
                'nombre' => $r->nombre_completo,
                'telefono' => $r->telefono,
                'email' => $r->email,
                'dias' => implode(', ', array_map(fn ($d) => $d === 'sabado' ? 'Sáb 18 abr' : 'Dom 19 abr', $r->dias_asistencia ?? [])),
                'fecha' => $r->created_at?->format('d/m/Y H:i'),
            ]),
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function dbInfo()
    {
        try {
            DB::connection()->getPdo();
            $connected = true;
            $dbName = DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            $connected = false;
            $dbName = $e->getMessage();
        }

        $columns = [];
        $hasDias = false;
        if ($connected && Schema::hasTable('duelo_registros')) {
            $columns = Schema::getColumnListing('duelo_registros');
            $hasDias = Schema::hasColumn('duelo_registros', 'dias_asistencia');
        }

        $mysqlCfg = config('database.connections.mysql');
        try {
            $liveCfg = DB::connection()->getConfig();
        } catch (\Throwable) {
            $liveCfg = [];
        }

        return response()->json([
            'db_connection' => config('database.default'),
            'mysql_url_in_env' => ! empty(env('MYSQL_URL')),
            'resolved_host' => $liveCfg['host'] ?? ($mysqlCfg['host'] ?? null),
            'resolved_port' => $liveCfg['port'] ?? ($mysqlCfg['port'] ?? null),
            'db_host_env' => env('DB_HOST', env('MYSQLHOST')),
            'db_port_env' => env('DB_PORT', env('MYSQLPORT')),
            'db_database' => env('DB_DATABASE', env('MYSQLDATABASE')),
            'db_username' => env('DB_USERNAME', env('MYSQLUSER')),
            'connected' => $connected,
            'database_name' => $dbName,
            'duelo_registros_columns' => $columns,
            'has_dias_asistencia_column' => $hasDias,
            'registros_count' => $connected && Schema::hasTable('duelo_registros')
                ? DueloRegistro::count()
                : null,
        ], 200, [], JSON_PRETTY_PRINT);
    }
}
