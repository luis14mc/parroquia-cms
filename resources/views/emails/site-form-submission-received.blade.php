<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: ui-sans-serif, system-ui, sans-serif; line-height: 1.5; color: #1e293b;">
    <p style="margin: 0 0 12px;">
        Nueva inscripción en <strong>{{ $submission->siteForm?->name ?? '—' }}</strong>
        @if ($submission->siteForm?->slug)
            <span style="color:#64748b;">({{ $submission->siteForm->slug }})</span>
        @endif
    </p>
    <table cellpadding="6" cellspacing="0" border="0" style="border-collapse:collapse;font-size:14px;">
        @foreach ($submission->payload ?? [] as $key => $value)
            <tr>
                <td style="vertical-align:top;font-weight:600;border-bottom:1px solid #e2e8f0;">{{ $key }}</td>
                <td style="border-bottom:1px solid #e2e8f0;">
                    @if (is_scalar($value) || $value === null)
                        {{ $value }}
                    @else
                        {{ json_encode($value, JSON_UNESCAPED_UNICODE) }}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <p style="margin-top:16px;font-size:13px;color:#64748b;">
        IP: {{ $submission->ip_address ?? '—' }}<br>
        Fecha: {{ $submission->created_at?->timezone(config('app.timezone'))->format('d/m/Y H:i') ?? '—' }}
    </p>
</body>
</html>
