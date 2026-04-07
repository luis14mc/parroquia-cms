<?php

namespace App\Http\Controllers;

use App\Models\DueloRegistro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
            if (config('database.default') === 'mysql' && ! extension_loaded('pdo_mysql')) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'db' => $this->messageMissingPdoMysql(),
                    ]);
            }

            $validated = $request->validate([
                'nombre_completo' => 'required|string|max:255',
                'telefono' => 'required|string|max:20',
                'email' => 'nullable|email|max:255',
                'dias_asistencia' => 'required|array|min:1',
                'dias_asistencia.*' => 'in:sabado,domingo',
            ]);

            if (! Schema::connection('mysql')->hasTable('duelo_registros')) {
                Log::critical('congreso: no existe la tabla duelo_registros (migraciones sin aplicar en este servidor)');

                return back()
                    ->withInput()
                    ->withErrors([
                        'db' => 'El sistema de inscripciones no está listo: falta crear las tablas en la base de datos. El administrador debe ejecutar en el servidor: php artisan migrate --force',
                    ]);
            }

            if (! Schema::connection('mysql')->hasColumn('duelo_registros', 'dias_asistencia')) {
                Log::critical('congreso: falta la columna dias_asistencia (migración 2026_03_30 sin aplicar)');

                return back()
                    ->withInput()
                    ->withErrors([
                        'db' => 'La base de datos está desactualizada: falta la columna de días de asistencia. El administrador debe ejecutar en el servidor: php artisan migrate --force',
                    ]);
            }

            $registro = DueloRegistro::create([
                'nombre_completo' => $validated['nombre_completo'],
                'telefono' => $validated['telefono'],
                'email' => $validated['email'] ?? null,
                'dias_asistencia' => $validated['dias_asistencia'],
            ]);

            $liveDb = DB::connection('mysql')->getDatabaseName();
            $serverDbName = null;
            try {
                $row = DB::connection('mysql')->selectOne('select database() as d');
                $serverDbName = $row->d ?? null;
            } catch (\Throwable) {
                // no bloquear el flujo si el diagnóstico extra falla
            }
            Log::info('Nuevo registro congreso (verificar misma BD que Railway)', [
                'id' => $registro->id,
                'nombre' => $registro->nombre_completo,
                'connection' => config('database.default'),
                'laravel_database_name' => $liveDb,
                'mysql_select_database()' => $serverDbName,
                'table' => $registro->getTable(),
            ]);

            return redirect()->route('congreso.gracias')->with([
                'nombre' => $registro->nombre_completo,
                'telefono' => $registro->telefono,
                'dias' => $registro->dias_asistencia,
            ]);
        } catch (ValidationException $e) {
            throw $e;
        } catch (QueryException $e) {
            Log::error('congreso registro: error SQL', [
                'message' => $e->getMessage(),
                'sql' => $e->getSql(),
                'bindings' => $e->getBindings(),
            ]);

            $msg = $this->friendlyDatabaseErrorMessage($e) ?? $this->userMessageForQueryException($e);

            return back()->withInput()->withErrors(['db' => $msg]);
        } catch (\Throwable $e) {
            Log::error('congreso registro: error al guardar', [
                'message' => $e->getMessage(),
                'file' => $e->getFile().':'.$e->getLine(),
                'exception' => $e::class,
            ]);

            if ($hint = $this->friendlyDatabaseErrorMessage($e)) {
                return back()->withInput()->withErrors(['db' => $hint]);
            }

            $msg = 'No se pudo guardar el registro. Intente de nuevo o contacte a la parroquia.';
            if (config('app.debug')) {
                $msg .= ' ('.$e->getMessage().')';
            }

            return back()->withInput()->withErrors(['db' => $msg]);
        }
    }

    public function registros(Request $request)
    {
        $this->authorizeCongresoAdmin($request);

        $registros = DueloRegistro::orderByDesc('created_at')->get();

        $payload = [
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
        ];

        if ($request->wantsJson()) {
            return response()->json($payload, 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        return view('campaña-duelo.lista-registros', [
            'registros' => $registros,
            'total' => $payload['total'],
        ]);
    }

    private function messageMissingPdoMysql(): string
    {
        $php = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;

        return 'PHP no tiene la extensión pdo_mysql (necesaria para MySQL). En WSL/Ubuntu: sudo apt install php'.$php.'-mysql && reinicia el servidor. Comprueba con: php -m | grep pdo_mysql. En Railway (Nixpacks) ya está incluida; este fallo suele ser en tu PC.';
    }

    /**
     * Errores de entorno (p. ej. sin extensión PDO MySQL) que no deben mostrar el dump técnico al usuario.
     */
    private function friendlyDatabaseErrorMessage(\Throwable $e): ?string
    {
        $m = $e->getMessage();
        if (str_contains($m, 'could not find driver')) {
            return $this->messageMissingPdoMysql();
        }

        return null;
    }

    private function userMessageForQueryException(QueryException $e): string
    {
        $m = $e->getMessage();
        $base = 'No se pudo guardar en la base de datos. ';

        if ($friendly = $this->friendlyDatabaseErrorMessage($e)) {
            return $friendly;
        }

        if (str_contains($m, 'Unknown column') || str_contains($m, '1054')) {
            return $base.'Falta una columna nueva: el administrador debe ejecutar en el servidor: php artisan migrate --force';
        }

        if (str_contains($m, 'Base table') && str_contains($m, "doesn't exist")
            || str_contains($m, '1146') || str_contains($m, 'SQLSTATE[42S02]')) {
            return $base.'Falta la tabla de registros: el administrador debe ejecutar: php artisan migrate --force';
        }

        if (str_contains($m, 'Access denied') || str_contains($m, '1045')) {
            return $base.'Error de usuario o contraseña de la base de datos (revisar variables MYSQL_* en el hosting).';
        }

        if (str_contains($m, 'Connection refused') || str_contains($m, 'timed out') || str_contains($m, 'getaddrinfo')) {
            return $base.'No se puede conectar al servidor MySQL (host o red incorrectos en el hosting).';
        }

        if (config('app.debug')) {
            return $base.'['.$m.']';
        }

        return $base.'Si el problema continúa, el administrador debe revisar los logs del servidor y las migraciones.';
    }

    /**
     * En producción: definir CONGRESO_ADMIN_TOKEN y abrir /congreso/registros?token=...
     */
    private function authorizeCongresoAdmin(Request $request): void
    {
        if (! App::isProduction()) {
            return;
        }

        $expected = config('services.congreso.admin_token');
        $given = (string) $request->query('token', '');

        if (! is_string($expected) || $expected === '') {
            abort(403, 'Configura la variable CONGRESO_ADMIN_TOKEN en Railway (Variables del servicio web) y vuelve a abrir esta URL añadiendo ?token=TU_TOKEN al final.');
        }

        if (! hash_equals($expected, $given)) {
            abort(403, 'Token incorrecto o falta ?token= en la URL.');
        }
    }

    public function dbInfo(Request $request)
    {
        $this->authorizeCongresoAdmin($request);

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

        // NUNCA usar env() aquí: con config:cache (o bootstrap cache viejo) env() devuelve null
        // y el diagnóstico miente. Solo config() y getConfig() del PDO ya resuelto.
        $urlFromConfig = $mysqlCfg['url'] ?? null;
        $resolvedHost = $liveCfg['host'] ?? ($mysqlCfg['host'] ?? null);
        $resolvedPort = $liveCfg['port'] ?? ($mysqlCfg['port'] ?? null);
        $resolvedDatabase = $liveCfg['database'] ?? ($mysqlCfg['database'] ?? null);
        $resolvedUser = $liveCfg['username'] ?? ($mysqlCfg['username'] ?? null);

        $serverIdentity = null;
        if ($connected) {
            try {
                $serverIdentity = DB::connection()->selectOne(
                    'select database() as current_db, @@hostname as server_host, @@port as server_port'
                );
            } catch (\Throwable) {
                $serverIdentity = null;
            }
        }

        return response()->json([
            'db_connection' => config('database.default'),
            'note' => 'Los datos se guardan en la tabla duelo_registros de la base "current_db" que devuelve MySQL (debe coincidir con MYSQLDATABASE en Railway).',
            'mysql_url_in_config' => is_string($urlFromConfig) && $urlFromConfig !== '',
            'resolved_host' => $resolvedHost,
            'resolved_port' => $resolvedPort,
            'resolved_database_from_config' => $resolvedDatabase,
            'resolved_username' => $resolvedUser,
            'connected' => $connected,
            'database_name_from_laravel' => $dbName,
            'server_says' => $serverIdentity,
            'duelo_registros_columns' => $columns,
            'has_dias_asistencia_column' => $hasDias,
            'registros_count' => $connected && Schema::hasTable('duelo_registros')
                ? DueloRegistro::count()
                : null,
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
