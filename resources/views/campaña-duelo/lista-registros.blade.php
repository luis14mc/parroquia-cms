<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscripciones — Congreso</title>
    <style>
        :root { font-family: system-ui, sans-serif; color: #1a1a1a; }
        body { margin: 0; padding: 1.5rem; background: #f6f6f6; }
        h1 { font-size: 1.25rem; margin: 0 0 1rem; }
        .meta { color: #555; font-size: 0.9rem; margin-bottom: 1.25rem; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,.08); }
        th, td { text-align: left; padding: 0.65rem 0.75rem; border-bottom: 1px solid #e8e8e8; }
        th { background: #fafafa; font-weight: 600; font-size: 0.8rem; text-transform: uppercase; letter-spacing: .03em; }
        tr:hover td { background: #fcfcfc; }
        .empty { padding: 2rem; text-align: center; color: #666; }
    </style>
</head>
<body>
    <h1>Inscripciones al congreso</h1>
    <p class="meta">Total: <strong>{{ $total }}</strong> @if($total === 0) (aún no hay filas en esta base de datos) @endif</p>

    @if($registros->isEmpty())
        <p class="empty">No hay registros.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Días</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $r)
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->nombre_completo }}</td>
                        <td>{{ $r->telefono }}</td>
                        <td>{{ $r->email ?? '—' }}</td>
                        <td>
                            @foreach($r->dias_asistencia ?? [] as $d)
                                {{ $d === 'sabado' ? 'Sáb 18 abr' : 'Dom 19 abr' }}@if(!$loop->last), @endif
                            @endforeach
                        </td>
                        <td>{{ $r->created_at?->format('d/m/Y H:i') ?? '—' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
