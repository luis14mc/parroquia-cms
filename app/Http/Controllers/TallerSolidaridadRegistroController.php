<?php

namespace App\Http\Controllers;

use App\Models\TallerSolidaridadRegistro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\ValidationException;

class TallerSolidaridadRegistroController extends Controller
{
    public function index()
    {
        return view('taller-solidaridad.registro');
    }

    public function limpiarSesion(Request $request)
    {
        $this->authorizeParroquiaAdmin($request);
        session()->flush();

        return redirect()->route('taller-solidaridad.index');
    }

    public function store(Request $request)
    {
        Log::info('taller-solidaridad.store: petición recibida', [
            'session_driver' => config('session.driver'),
        ]);

        try {
            $driver = config('database.connections.'.config('database.default').'.driver');
            if (($driver === 'mysql' || $driver === 'mariadb') && ! extension_loaded('pdo_mysql')) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'db' => $this->messageMissingPdoMysql(),
                    ]);
            }

            $validated = $request->validate([
                'nombre_completo' => 'required|string|max:255',
                'telefono' => 'required|string|max:32',
                'email' => 'required|email|max:255',
                'sector_parroquial' => 'required|string|max:255',
            ]);

            if (! Schema::hasTable('taller_solidaridad_registros')) {
                Log::critical('taller-solidaridad: no existe la tabla taller_solidaridad_registros');

                return back()
                    ->withInput()
                    ->withErrors([
                        'db' => 'El sistema de inscripciones no está listo: falta crear las tablas en la base de datos. El administrador debe ejecutar en el servidor: php artisan migrate --force',
                    ]);
            }

            $registro = TallerSolidaridadRegistro::create([
                'nombre_completo' => $validated['nombre_completo'],
                'telefono' => $validated['telefono'],
                'email' => $validated['email'],
                'sector_parroquial' => $validated['sector_parroquial'],
            ]);

            try {
                $row = DB::connection()->selectOne('select database() as d');
                $serverDbName = $row->d ?? null;
            } catch (\Throwable) {
                $serverDbName = null;
            }

            Log::info('Nuevo registro taller solidaridad', [
                'id' => $registro->id,
                'nombre' => $registro->nombre_completo,
                'connection' => config('database.default'),
                'mysql_select_database()' => $serverDbName,
                'table' => $registro->getTable(),
            ]);

            return redirect()->route('taller-solidaridad.gracias')->with([
                'nombre' => $registro->nombre_completo,
            ]);
        } catch (ValidationException $e) {
            throw $e;
        } catch (QueryException $e) {
            Log::error('taller-solidaridad registro: error SQL', [
                'message' => $e->getMessage(),
                'sql' => $e->getSql(),
                'bindings' => $e->getBindings(),
            ]);

            $msg = $this->friendlyDatabaseErrorMessage($e) ?? $this->userMessageForQueryException($e);

            return back()->withInput()->withErrors(['db' => $msg]);
        } catch (\Throwable $e) {
            Log::error('taller-solidaridad registro: error al guardar', [
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
        $this->authorizeParroquiaAdmin($request);

        $registros = TallerSolidaridadRegistro::orderByDesc('created_at')->get();

        $payload = [
            'total' => $registros->count(),
            'db_driver' => config('database.default'),
            'db_host' => config('database.connections.'.config('database.default').'.host') ?? 'N/A',
            'registros' => $registros->map(fn ($r) => [
                'id' => $r->id,
                'nombre' => $r->nombre_completo,
                'telefono' => $r->telefono,
                'email' => $r->email,
                'sector_parroquial' => $r->sector_parroquial,
                'fecha' => $r->created_at?->format('d/m/Y H:i'),
            ]),
        ];

        if ($request->wantsJson()) {
            return response()->json($payload, 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        return view('taller-solidaridad.lista-registros', [
            'registros' => $registros,
            'total' => $payload['total'],
        ]);
    }

    private function messageMissingPdoMysql(): string
    {
        $php = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;

        return 'PHP no tiene la extensión pdo_mysql (necesaria para MySQL). En WSL/Ubuntu: sudo apt install php'.$php.'-mysql && reinicia el servidor. Comprueba con: php -m | grep pdo_mysql. En Railway (Nixpacks) ya está incluida; este fallo suele ser en tu PC.';
    }

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

    private function authorizeParroquiaAdmin(Request $request): void
    {
        if (! App::isProduction()) {
            return;
        }

        $expected = config('parroquia.admin_token');
        $given = (string) $request->query('token', '');

        if (! is_string($expected) || $expected === '') {
            abort(403, 'Configura CONGRESO_ADMIN_TOKEN en el servidor (Variables) y abre esta URL con ?token=TU_TOKEN.');
        }

        if (! hash_equals($expected, $given)) {
            abort(403, 'Token incorrecto o falta ?token= en la URL.');
        }
    }

    public function dbInfo(Request $request)
    {
        $this->authorizeParroquiaAdmin($request);

        try {
            DB::connection()->getPdo();
            $connected = true;
            $dbName = DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            $connected = false;
            $dbName = $e->getMessage();
        }

        $columns = [];
        if ($connected && Schema::hasTable('taller_solidaridad_registros')) {
            $columns = Schema::getColumnListing('taller_solidaridad_registros');
        }

        $connName = config('database.default');
        $mysqlCfg = config('database.connections.'.$connName, []);
        try {
            $liveCfg = DB::connection()->getConfig();
        } catch (\Throwable) {
            $liveCfg = [];
        }

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
            'note' => 'Los datos se guardan en taller_solidaridad_registros (current_db debe coincidir con MYSQLDATABASE en Railway).',
            'mysql_url_in_config' => is_string($urlFromConfig) && $urlFromConfig !== '',
            'resolved_host' => $resolvedHost,
            'resolved_port' => $resolvedPort,
            'resolved_database_from_config' => $resolvedDatabase,
            'resolved_username' => $resolvedUser,
            'connected' => $connected,
            'database_name_from_laravel' => $dbName,
            'server_says' => $serverIdentity,
            'taller_solidaridad_registros_columns' => $columns,
            'registros_count' => $connected && Schema::hasTable('taller_solidaridad_registros')
                ? TallerSolidaridadRegistro::count()
                : null,
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
